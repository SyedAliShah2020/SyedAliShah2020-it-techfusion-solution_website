<?php include("includes/header.php"); ?>

<!-- Hero Section -->
<section class="text-white text-center py-5" style="background: linear-gradient(to right, #1e293b, #3b82f6);" data-aos="fade-down">
  <div class="container">
    <h1 class="display-5 fw-bold">Contact Us</h1>
    <p class="lead mt-3">We're here to assist you. Reach out anytime.</p>
  </div>
</section>

<!-- Contact Info + Form -->
<section class="container py-5">
  <div class="row g-4">

    <!-- Contact Information -->
    <div class="col-md-5" data-aos="fade-right">
      <div class="bg-light p-4 rounded shadow-sm">
        <h4 class="mb-3">📍 Headquarter</h4>
        <p><strong>Location:</strong> Multan, Punjab</p>
        <p><strong>Email:</strong> <a href="mailto:techfusionsolutions2@gmail.com">techfusionsolutions2@gmail.com</a></p>
        <p><strong>PTCL:</strong> 061-1234567</p>
        <p><strong>Cell:</strong> 0300-1234567</p>
        <p>For inquiries, collaborations, or training details, please fill out the form. Our team will respond within 24 hours.</p>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="col-md-7" data-aos="fade-left">
      <div class="bg-white p-4 rounded shadow-sm">
        <form action="send_contact.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

           <div class="mb-3">
              <label for="contact" class="form-label">Contact Number</label>
              <input type="tel" name="contact" id="contact" class="form-control" placeholder="+92XXXXXXXXXX" required>
            </div>

          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea name="message" class="form-control" rows="5" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>

  </div>
</section>



<!-- Google Map Section -->
<section class="container pb-5" data-aos="zoom-in">
  <div class="rounded shadow-sm overflow-hidden" style="height: 400px;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10838.941510502146!2d71.4705251612902!3d30.198644537227535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b34ce22f631f5%3A0x426d5b1664e0ed46!2sGhanta%20Ghar%20Multan!5e0!3m2!1sen!2s!4v1621956553985!5m2!1sen!2s" 
      width="100%" 
      height="100%" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>


<!-- Call to Action -->
<section class="text-white text-center py-4" style="background-color: #1e40af;" data-aos="fade-up">
  <div class="container">
    <h5 class="mb-0">We’ll respond to your query as soon as possible. Thanks for reaching out!</h5>
  </div>
</section>


<?php include("includes/footer.php"); ?>
