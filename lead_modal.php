<!-- Lead Capture Auto Popup Modal -->
<div id="lead-modal-overlay" class="lead-modal-overlay">
    <div class="lead-modal-card">
        <button type="button" class="lead-modal-close-btn" id="closeLeadModal" aria-label="Close modal">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="lead-modal-header text-center">
            <div class="lead-modal-badge">
                <i class="fa-solid fa-bolt"></i>  DIGITAL GROWTH AUDIT
            </div>
            <h2 class="lead-modal-title">Start Your Digital Journey Today!</h2>
            <p class="lead-modal-subtitle">
                Fill in your details below to get a <strong>customized digital marketing strategy</strong> 
            </p>
        </div>

        <form id="leadCaptureForm" class="lead-modal-form" action="send_mail.php" method="POST">
            <input type="hidden" name="form_type" value="lead_modal">
            <div class="lead-form-grid">
                
                <!-- Full Name -->
                <div class="lead-input-group">
                    <label for="lead_name" class="lead-label">Full Name *</label>
                    <div class="lead-input-wrapper">
                        <i class="fa-solid fa-user lead-input-icon"></i>
                        <input type="text" id="lead_name" name="name" class="lead-input" placeholder="e.g. Rahul Sharma" required>
                    </div>
                </div>

                <!-- Phone / WhatsApp -->
                <div class="lead-input-group">
                    <label for="lead_phone" class="lead-label">Phone / WhatsApp *</label>
                    <div class="lead-input-wrapper">
                        <i class="fa-solid fa-phone lead-input-icon"></i>
                        <input type="tel" id="lead_phone" name="phone" class="lead-input" placeholder="e.g. +91 98765 43210" required>
                    </div>
                </div>

                <!-- Email Address -->
                <div class="lead-input-group">
                    <label for="lead_email" class="lead-label">Email Address *</label>
                    <div class="lead-input-wrapper">
                        <i class="fa-solid fa-envelope lead-input-icon"></i>
                        <input type="email" id="lead_email" name="email" class="lead-input" placeholder="e.g. rahul@example.com" required>
                    </div>
                </div>

                <!-- Service Required -->
                <div class="lead-input-group">
                    <label for="lead_service" class="lead-label">Service Required *</label>
                    <div class="lead-input-wrapper">
                        <i class="fa-solid fa-layer-group lead-input-icon"></i>
                        <select id="lead_service" name="service" class="lead-select" required>
                            <option value="" disabled selected>Select a Service...</option>
                            <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                            <option value="Google Ads / PPC Campaigns">Google Ads / PPC Campaigns</option>
                            <option value="Social Media Marketing (SMM)">Social Media Marketing (SMM)</option>
                            <option value="Website Design & Development">Website Design & Development</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="Branding & Creative Design">Branding & Creative Design</option>
                            <option value="Full Performance Marketing Suite">Full Performance Marketing Suite</option>
                        </select>
                    </div>
                </div>

                <!-- Message / Business Goal -->
                <div class="lead-input-group lead-full-width">
                    <label for="lead_message" class="lead-label">Business Goal / Requirements</label>
                    <div class="lead-input-wrapper">
                        <i class="fa-solid fa-comment-dots lead-input-icon lead-icon-textarea"></i>
                        <textarea id="lead_message" name="message" class="lead-textarea" rows="2" placeholder="Tell us briefly about your business goals or target audience..."></textarea>
                    </div>
                </div>

            </div>

            <!-- Form Footer -->
            <div class="lead-modal-footer">
                <button type="submit" class="btn btn-accent lead-submit-btn" id="leadModalSubmitBtn">
                    <div class="btn-title">
                        <span>Let's Talk</span>
                    </div>
        <div class="icon-circle">
    <i class="fa-solid fa-arrow-right"></i>
</div>

                </button>

                <p class="lead-privacy-note">
                    <i class="fa-solid fa-shield-halved"></i> 100% Confidential • We respect your privacy & data.
                </p>
                <div id="leadFormResponse" class="lead-response-msg"></div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const leadModal = document.getElementById("lead-modal-overlay");
    const closeBtn = document.getElementById("closeLeadModal");
    const leadForm = document.getElementById("leadCaptureForm");
    const responseMsg = document.getElementById("leadFormResponse");
    const submitBtn = document.getElementById("leadModalSubmitBtn");

    // Auto-open modal on page load after a smooth short delay
    setTimeout(function () {
        if (leadModal) {
            leadModal.classList.add("active");
            document.body.style.overflow = "hidden"; // prevent background scroll
        }
    }, 500);

    // Close Modal Function
    function closePopupModal() {
        if (leadModal) {
            leadModal.classList.remove("active");
            document.body.style.overflow = "";
        }
    }

    // Close Button Event
    if (closeBtn) {
        closeBtn.addEventListener("click", closePopupModal);
    }

    // Close on Click Outside Modal Card
    if (leadModal) {
        leadModal.addEventListener("click", function (e) {
            if (e.target === leadModal) {
                closePopupModal();
            }
        });
    }

    // Close on Escape Key press
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && leadModal && leadModal.classList.contains("active")) {
            closePopupModal();
        }
    });

    // Form Submission via SMTP AJAX
    if (leadForm) {
        leadForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // Disable button & show loading text
            submitBtn.disabled = true;
            submitBtn.style.opacity = "0.7";
            const originalBtnTitle = submitBtn.querySelector(".btn-title span").innerText;
            submitBtn.querySelector(".btn-title span").innerText = "Sending...";

            responseMsg.className = "lead-response-msg";
            responseMsg.innerHTML = "";

            const formData = new FormData(leadForm);

            fetch("send_mail.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.style.opacity = "1";
                submitBtn.querySelector(".btn-title span").innerText = originalBtnTitle;

                if (data.status === "success") {
                    responseMsg.className = "lead-response-msg success";
                    responseMsg.innerHTML = '<i class="fa-solid fa-circle-check"></i> ' + data.message;
                    leadForm.reset();

                    // Auto close after 2.5 seconds
                    setTimeout(function () {
                        closePopupModal();
                        responseMsg.innerHTML = "";
                    }, 2500);
                } else {
                    responseMsg.className = "lead-response-msg error";
                    responseMsg.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i> ' + (data.message || "Failed to send lead. Please try again.");
                }
            })
            .catch(error => {
                submitBtn.disabled = false;
                submitBtn.style.opacity = "1";
                submitBtn.querySelector(".btn-title span").innerText = originalBtnTitle;
                responseMsg.className = "lead-response-msg error";
                responseMsg.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i> Network error. Please try again.';
            });
        });
    }
});
</script>
