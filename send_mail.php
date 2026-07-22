<?php
header('Content-Type: application/json');

// Suppress raw errors from corrupting JSON output
error_reporting(E_ALL);
ini_set('display_errors', 0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// Gmail SMTP Credentials provided by User
$smtpHost = 'smtp.gmail.com';
$smtpPort = 465; // SSL
$smtpUser = 'marketenza@gmail.com';
$smtpPass = 'mwzqyxxfyzunvczp'; // Gmail App Password without spaces

$recipientEmail = 'marketenza@gmail.com';

// Determine form type
$formType = isset($_POST['form_type']) ? trim($_POST['form_type']) : 'contact';

if ($formType === 'lead_modal') {
    // Lead Popup Modal Form
    $name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
    $email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
    $service = isset($_POST['service']) ? sanitizeInput($_POST['service']) : 'Not Specified';
    $message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : 'No message provided.';

    if (empty($name) || empty($email) || empty($phone)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields (Name, Phone, Email).']);
        exit;
    }

    $subject = "⚡ New Lead Growth Audit Request: $name ($service)";
    $htmlContent = buildLeadModalEmailHTML($name, $phone, $email, $service, $message);
    $replyToEmail = $email;
    $replyToName = $name;

} else {
    // Contact Us Form
    $firstName = isset($_POST['first-name']) ? sanitizeInput($_POST['first-name']) : (isset($_POST['first_name']) ? sanitizeInput($_POST['first_name']) : '');
    $lastName = isset($_POST['last-name']) ? sanitizeInput($_POST['last-name']) : (isset($_POST['last_name']) ? sanitizeInput($_POST['last_name']) : '');
    $name = trim($firstName . ' ' . $lastName);
    if (empty($name)) $name = 'Website Visitor';

    $email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
    $userSubject = isset($_POST['subject']) ? sanitizeInput($_POST['subject']) : 'General Inquiry';
    if (empty($userSubject)) $userSubject = 'General Inquiry';
    $message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';

    if (empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields (Email, Message).']);
        exit;
    }

    $subject = "📩 New Contact Inquiry: $userSubject - from $name";
    $htmlContent = buildContactEmailHTML($name, $email, $userSubject, $message);
    $replyToEmail = $email;
    $replyToName = $name;
}

// Send via SMTP
$sent = sendViaGmailSMTP($smtpHost, $smtpPort, $smtpUser, $smtpPass, $recipientEmail, $subject, $htmlContent, $replyToEmail, $replyToName);

if ($sent) {
    echo json_encode(['status' => 'success', 'message' => 'Thank you! Your message has been sent successfully.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to send email via SMTP. Please check your internet connection or App Password settings.']);
}

// Helper: Input Sanitization
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Helper: Socket SMTP Mailer Function for Gmail
function sendViaGmailSMTP($host, $port, $username, $password, $to, $subject, $htmlBody, $replyToEmail = '', $replyToName = '') {
    $timeout = 20;
    
    // Connect via SSL to Gmail (Port 465)
    $socket = @fsockopen('ssl://' . $host, $port, $errno, $errstr, $timeout);
    
    if (!$socket) {
        // Fallback to TLS on 587
        $socket = @stream_socket_client('tcp://' . $host . ':587', $errno, $errstr, $timeout);
        if (!$socket) {
            return false;
        }
        readSMTPResponse($socket);
        fwrite($socket, "EHLO localhost\r\n");
        readSMTPResponse($socket);
        fwrite($socket, "STARTTLS\r\n");
        readSMTPResponse($socket);
        stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
        fwrite($socket, "EHLO localhost\r\n");
        readSMTPResponse($socket);
    } else {
        readSMTPResponse($socket);
        fwrite($socket, "EHLO localhost\r\n");
        readSMTPResponse($socket);
    }

    // AUTH LOGIN
    fwrite($socket, "AUTH LOGIN\r\n");
    $res = readSMTPResponse($socket);
    if (substr($res, 0, 3) !== '334') return false;

    fwrite($socket, base64_encode($username) . "\r\n");
    $res = readSMTPResponse($socket);
    if (substr($res, 0, 3) !== '334') return false;

    fwrite($socket, base64_encode($password) . "\r\n");
    $res = readSMTPResponse($socket);
    if (substr($res, 0, 3) !== '235') return false;

    // MAIL FROM
    fwrite($socket, "MAIL FROM: <" . $username . ">\r\n");
    readSMTPResponse($socket);

    // RCPT TO
    fwrite($socket, "RCPT TO: <" . $to . ">\r\n");
    readSMTPResponse($socket);

    // DATA
    fwrite($socket, "DATA\r\n");
    readSMTPResponse($socket);

    // Email Headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: MARKETENZA <" . $username . ">\r\n";
    if (!empty($replyToEmail)) {
        $headers .= "Reply-To: " . (!empty($replyToName) ? $replyToName : $replyToEmail) . " <" . $replyToEmail . ">\r\n";
    }
    $headers .= "Subject: " . $subject . "\r\n";
    $headers .= "Date: " . date("r") . "\r\n";

    $messageBody = $headers . "\r\n" . $htmlBody . "\r\n.\r\n";
    fwrite($socket, $messageBody);
    $res = readSMTPResponse($socket);

    fwrite($socket, "QUIT\r\n");
    fclose($socket);

    return (substr($res, 0, 3) === '250');
}

function readSMTPResponse($socket) {
    $response = '';
    while ($str = fgets($socket, 512)) {
        $response .= $str;
        if (substr($str, 3, 1) === ' ') break;
    }
    return $response;
}

// HTML Email Template: Lead Popup Modal
function buildLeadModalEmailHTML($name, $phone, $email, $service, $message) {
    $date = date('d M Y, h:i A');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

    return '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <style>
            body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background-color: #f1f5f9; margin: 0; padding: 20px; color: #1e293b; }
            .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; }
            .header { background: linear-gradient(135deg, #0f172a 0%, #0066ff 100%); padding: 30px 25px; text-align: center; color: #ffffff; }
            .header h1 { margin: 0; font-size: 22px; font-weight: 800; letter-spacing: 0.5px; }
            .header p { margin: 6px 0 0; font-size: 13px; opacity: 0.9; }
            .badge { display: inline-block; background: #efbc2a; color: #000000; font-size: 11px; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase; margin-bottom: 10px; }
            .body { padding: 30px 25px; }
            .field-table { width: 100%; border-collapse: collapse; margin-top: 15px; }
            .field-table td { padding: 12px 14px; border-bottom: 1px solid #f1f5f9; font-size: 14px; }
            .field-label { width: 35%; font-weight: 700; color: #475569; background-color: #f8fafc; }
            .field-value { color: #0f172a; font-weight: 500; }
            .highlight-badge { background: #e6f0ff; color: #0066ff; padding: 4px 10px; border-radius: 6px; font-weight: 700; display: inline-block; }
            .msg-box { background: #f8fafc; border-left: 4px solid #0066ff; padding: 14px; border-radius: 6px; margin-top: 6px; font-style: italic; color: #334155; line-height: 1.6; }
            .footer { background: #f8fafc; border-top: 1px solid #e2e8f0; padding: 18px 25px; text-align: center; font-size: 12px; color: #64748b; }
            .footer a { color: #0066ff; text-decoration: none; font-weight: 600; }
            .btn { display: inline-block; background: #0066ff; color: #ffffff !important; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 700; margin-top: 20px; font-size: 14px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <span class="badge">🔥 POPUP LEAD AUDIT REQUEST</span>
                <h1>MARKETENZA - New Lead Capture</h1>
                <p>A new customer has requested a free consultation via the website modal.</p>
            </div>
            <div class="body">
                <h3 style="margin-top:0; color:#0066ff;">Lead Contact Details</h3>
                <table class="field-table">
                    <tr>
                        <td class="field-label">Full Name</td>
                        <td class="field-value"><strong>' . $name . '</strong></td>
                    </tr>
                    <tr>
                        <td class="field-label">Phone / WhatsApp</td>
                        <td class="field-value"><a href="tel:' . $phone . '" style="color:#0066ff; text-decoration:none; font-weight:700;">' . $phone . '</a></td>
                    </tr>
                    <tr>
                        <td class="field-label">Email Address</td>
                        <td class="field-value"><a href="mailto:' . $email . '" style="color:#0066ff; text-decoration:none;">' . $email . '</a></td>
                    </tr>
                    <tr>
                        <td class="field-label">Service Required</td>
                        <td class="field-value"><span class="highlight-badge">' . $service . '</span></td>
                    </tr>
                    <tr>
                        <td class="field-label">Submission Time</td>
                        <td class="field-value">' . $date . '</td>
                    </tr>
                  
                </table>

                <h4 style="margin-bottom:8px; margin-top:20px; color:#475569;">Business Goal / Requirements:</h4>
                <div class="msg-box">' . nl2br($message) . '</div>

                <div style="text-align: center;">
                    <a href="mailto:' . $email . '?subject=Re:%20Free%20Digital%20Growth%20Consultation%20-%20MARKETENZA" class="btn">Reply To Customer Now</a>
                </div>
            </div>
            <div class="footer">
                <p style="margin:0;">This lead notification was automatically generated by <a href="https://marketenza.com">MARKETENZA Website</a>.</p>
            </div>
        </div>
    </body>
    </html>';
}

// HTML Email Template: Contact Us Page Form
function buildContactEmailHTML($name, $email, $userSubject, $message) {
    $date = date('d M Y, h:i A');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

    return '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <style>
            body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background-color: #f1f5f9; margin: 0; padding: 20px; color: #1e293b; }
            .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; }
            .header { background: linear-gradient(135deg, #0066ff 0%, #0044b3 100%); padding: 30px 25px; text-align: center; color: #ffffff; }
            .header h1 { margin: 0; font-size: 22px; font-weight: 800; }
            .header p { margin: 6px 0 0; font-size: 13px; opacity: 0.9; }
            .body { padding: 30px 25px; }
            .field-table { width: 100%; border-collapse: collapse; margin-top: 15px; }
            .field-table td { padding: 12px 14px; border-bottom: 1px solid #f1f5f9; font-size: 14px; }
            .field-label { width: 35%; font-weight: 700; color: #475569; background-color: #f8fafc; }
            .field-value { color: #0f172a; font-weight: 500; }
            .msg-box { background: #f8fafc; border-left: 4px solid #0066ff; padding: 14px; border-radius: 6px; margin-top: 8px; color: #334155; line-height: 1.6; }
            .footer { background: #f8fafc; border-top: 1px solid #e2e8f0; padding: 18px 25px; text-align: center; font-size: 12px; color: #64748b; }
            .btn { display: inline-block; background: #0066ff; color: #ffffff !important; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 700; margin-top: 20px; font-size: 14px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>MARKETENZA - Contact Form Submission</h1>
                <p>You have received a new inquiry from the Contact Us page.</p>
            </div>
            <div class="body">
                <h3 style="margin-top:0; color:#0066ff;">Inquiry Details</h3>
                <table class="field-table">
                    <tr>
                        <td class="field-label">Sender Name</td>
                        <td class="field-value"><strong>' . $name . '</strong></td>
                    </tr>
                    <tr>
                        <td class="field-label">Email Address</td>
                        <td class="field-value"><a href="mailto:' . $email . '" style="color:#0066ff; text-decoration:none; font-weight:600;">' . $email . '</a></td>
                    </tr>
                    <tr>
                        <td class="field-label">Subject</td>
                        <td class="field-value">' . $userSubject . '</td>
                    </tr>
                    <tr>
                        <td class="field-label">Submission Date</td>
                        <td class="field-value">' . $date . '</td>
                    </tr>
                  
                </table>

                <h4 style="margin-bottom:8px; margin-top:20px; color:#475569;">Message:</h4>
                <div class="msg-box">' . nl2br($message) . '</div>

                <div style="text-align: center;">
                    <a href="mailto:' . $email . '?subject=Re:%20' . rawurlencode($userSubject) . '" class="btn">Reply to ' . $name . '</a>
                </div>
            </div>
            <div class="footer">
                <p style="margin:0;">MARKETENZA Performance Marketing Solutions • Noida, India</p>
            </div>
        </div>
    </body>
    
    </html>';
}
