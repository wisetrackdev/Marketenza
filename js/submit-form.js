function initSubmitContact() {
    $('#contact-form').on('submit', function (event) {
        event.preventDefault();

        var $form = $(this);
        var $email = $('#email');
        var $successMessage = $('#success-message');
        var $errorMessage = $('#error-message');
        var $submitBtn = $('#contact-submit-btn');

        function validateEmail(email) {
            var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return pattern.test(email);
        }

        if (!validateEmail($email.val())) {
            $errorMessage.find('p').text('Please enter a valid email address.');
            $errorMessage.removeClass('hidden');
            $successMessage.addClass('hidden');

            setTimeout(function () {
                $errorMessage.addClass('hidden');
            }, 3500);

            return;
        }

        // Disable button while sending
        $submitBtn.prop('disabled', true).css('opacity', '0.7');
        var originalBtnHtml = $submitBtn.html();
        $submitBtn.find('.btn-title span').text('Sending...');

        $.ajax({
            type: 'POST',
            url: 'send_mail.php',
            data: $form.serialize(),
            dataType: 'json',
            success: function (response) {
                $submitBtn.prop('disabled', false).css('opacity', '1').html(originalBtnHtml);

                if (response.status === 'success') {
                    $errorMessage.addClass('hidden');
                    $successMessage.find('p').text(response.message);
                    $successMessage.removeClass('hidden');
                    $form[0].reset();

                    setTimeout(function () {
                        $successMessage.addClass('hidden');
                    }, 5000);
                } else {
                    $successMessage.addClass('hidden');
                    $errorMessage.find('p').text(response.message || 'Submission failed. Please try again.');
                    $errorMessage.removeClass('hidden');

                    setTimeout(function () {
                        $errorMessage.addClass('hidden');
                    }, 5000);
                }
            },
            error: function () {
                $submitBtn.prop('disabled', false).css('opacity', '1').html(originalBtnHtml);
                $successMessage.addClass('hidden');
                $errorMessage.find('p').text('Network error. Unable to send email.');
                $errorMessage.removeClass('hidden');

                setTimeout(function () {
                    $errorMessage.addClass('hidden');
                }, 5000);
            }
        });
    });
}

function initSubmitNewsletter() {
    $('#newsletter-form').on('submit', function(event) {
        event.preventDefault();

        var $email = $('#newsletter-email');
        var $successMessage = $('#newsletter-success');
        var $errorMessage = $('#newsletter-error');
        var $errorText = $email.next('.error-text');

        var isValid = true;

        function validateEmail(email) {
            var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return pattern.test(email);
        }

        if (!$email.val().trim()) {
            $email.addClass('error-border');
            $errorText.removeClass('hidden').text('This field is required');
            isValid = false;
        } else if (!validateEmail($email.val())) {
            $email.addClass('error-border');
            $errorText.text('Invalid email format').removeClass('hidden');
            isValid = false;
        } else {
            $email.removeClass('error-border');
            $errorText.addClass('hidden');
        }

        if (isValid) {
            $successMessage.removeClass('hidden');
            $('#newsletter-form')[0].reset();
            setTimeout(function() {
                $successMessage.addClass('hidden');
            }, 3000);
        } else {
            $errorMessage.removeClass('hidden');
            $('#newsletter-form')[0].reset();
            setTimeout(function() {
                $errorMessage.addClass('hidden');
            }, 3000);
        }
    });
}

$(document).ready(function(){
    initSubmitContact();
    initSubmitNewsletter();
})