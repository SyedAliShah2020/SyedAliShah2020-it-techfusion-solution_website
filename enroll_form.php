<?php include("includes/header.php"); ?> 

<!-- Enroll Page Hero -->
<section class="text-white text-center py-5" style="background: linear-gradient(to right, #1e3a8a, #2563eb);">
  <div class="container">
    <h1 class="display-5 fw-bold">Course Enrollment Form</h1>
    <p class="lead">Fill in your details below to begin your tech journey with us</p>
  </div>
</section>

<!-- Enrollment Form Section -->
<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="bg-light p-5 rounded shadow-sm">
        <form action="submit_enrollment.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" name="phone" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Select Course</label>
            <select name="course" class="form-select" required>
              <option value="">-- Choose a Course --</option>
              <option>Web & App Development</option>
              <option>Graphic Designing</option>
              <option>Cybersecurity</option>
              <option>Data Science & AI</option>
              <option>Digital Marketing</option>
              <option>Cloud & DevOps</option>
              <option>Automation Tools</option>
              <option>Video Editing</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Preferred Learning Mode</label>
            <select name="mode" class="form-select" required>
              <option value="">-- Select Mode --</option>
              <option>In-Campus</option>
              <option>Online</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Additional Message (optional)</label>
            <textarea name="message" class="form-control" rows="4"></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-100">Submit Enrollment</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include("includes/footer.php"); ?>