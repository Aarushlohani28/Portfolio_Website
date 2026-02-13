<?php $pageTitle = 'Contact - My Portfolio'; $currentPage = 'contact'; include 'includes/header.php'; ?>

    <section id="contact" class="container">
        <h2 class="section-title">Contact Me</h2>
        <form id="contact-form" action="process_contact.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <small class="error-msg" id="name-error"></small>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <small class="error-msg" id="email-error"></small>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                <small class="error-msg" id="message-error"></small>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>

<?php include 'includes/footer.php'; ?>
