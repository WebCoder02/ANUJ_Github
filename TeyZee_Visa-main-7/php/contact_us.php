<?php include 'header.php'; ?>

<div class="container mt-5 mb-5">
    <h1 class="mb-4">Contact Us</h1>

    <p>
        We'd love to hear from you! Whether you have questions about our visa services, need assistance with your application, or want to share feedback — please reach out using the form below.
    </p>

    <form action="mailto:business.tours@kalltrip.com" method="post" enctype="text/plain">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name *</label>
            <input type="text" class="form-control" id="name" name="Name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address *</label>
            <input type="email" class="form-control" id="email" name="Email" required>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject *</label>
            <input type="text" class="form-control" id="subject" name="Subject" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message *</label>
            <textarea class="form-control" id="message" name="Message" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>

<?php include 'footer.php'; ?>
