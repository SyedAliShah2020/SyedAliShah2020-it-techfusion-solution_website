<?php include("includes/header.php"); ?>

<!-- Hero Section -->
<section class="text-white text-center py-5" style="background: linear-gradient(to right, #1e293b, #3b82f6);" data-aos="fade-down">
  <div class="container">
    <h1 class="display-5 fw-bold">Internship Programs</h1>
    <p class="lead mt-3">Learn by doing. Apply your skills to real-world projects with our guided internship tracks.</p>
  </div>
</section>

<!-- Internship Tracks -->
<section class="container py-5">
  <div class="row g-4">

    <!-- Freelancing -->
    <div class="col-md-4" data-aos="fade-up">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">💼 Freelancing</h5>
          <span class="badge bg-success mb-2">Remote</span>
          <p class="text-muted">
            Build strong freelance profiles, pitch effectively to clients, and work on real gigs. Learn Fiverr, Upwork, Freelancer strategies, proposal writing, and communication tips.
          </p>
          <a href="freelancing-details.php" class="btn btn-outline-primary mt-2">More Details</a>
        </div>
      </div>
    </div>

    <!-- Front End Web Development -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">🌐 Front End Web Development</h5>
          <span class="badge bg-primary mb-2">UI/UX Focused</span>
          <p class="text-muted">
            Design beautiful, responsive websites with HTML, CSS, Bootstrap, JavaScript, and React. Learn how to convert UI designs into fully functional and interactive websites.
          </p>
          <a href="frontend-details.php" class="btn btn-outline-primary mt-2">More Details</a>
        </div>
      </div>
    </div>

    <!-- Back End Web Development -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">🖥️ Back End Web Development</h5>
          <span class="badge bg-dark mb-2">Server Logic</span>
          <p class="text-muted">
            Build secure, scalable systems using PHP, MySQL, and Laravel. Understand how servers work, manage databases, create APIs, and handle backend logic like a pro.
          </p>
          <a href="backend-details.php" class="btn btn-outline-primary mt-2">More Details</a>
        </div>
      </div>
    </div>

    <!-- Artificial Intelligence -->
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">🧠 Artificial Intelligence</h5>
          <span class="badge bg-danger mb-2">Smart Tech</span>
          <p class="text-muted">
            Dive into Python, machine learning, and neural networks. Learn how to build intelligent systems, analyze data, and use AI tools for practical business applications.
          </p>
          <a href="ai-details.php" class="btn btn-outline-primary mt-2">More Details</a>
        </div>
      </div>
    </div>

    <!-- WordPress -->
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">📝 WordPress Development</h5>
          <span class="badge bg-info mb-2">CMS Power</span>
          <p class="text-muted">
            Learn to build websites using WordPress, Elementor, themes, and plugins. Create blogs, portfolios, and eCommerce stores with WooCommerce and SEO optimization.
          </p>
          <a href="wordpress-details.php" class="btn btn-outline-primary mt-2">More Details</a>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- Successful Interns Section -->
<section class="container py-5" id="successful-interns" data-aos="fade-up">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Successful Interns</h2>
    <p class="text-muted">Meet some of our brilliant interns who turned their passion into real-world success.</p>
  </div>
  <div class="row g-4">

    <!-- Intern 1 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0">
        <img src="https://images.pexels.com/photos/7567520/pexels-photo-7567520.jpeg?auto=compress&cs=tinysrgb&h=512" class="card-img-top" alt="Areeba Khan">
        <div class="card-body">
          <h5 class="card-title mb-1">Areeba Khan</h5>
          <p class="text-muted mb-1">Front End Web Development</p>
          <small class="text-secondary">Jan 2024 – Mar 2024</small>
        </div>
      </div>
    </div>

    <!-- Intern 2 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0">
        <img src="https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg?auto=compress&cs=tinysrgb&h=512" class="card-img-top" alt="Bilal Sheikh">
        <div class="card-body">
          <h5 class="card-title mb-1">Bilal Sheikh</h5>
          <p class="text-muted mb-1">Artificial Intelligence</p>
          <small class="text-secondary">Feb 2024 – May 2024</small>
        </div>
      </div>
    </div>

    <!-- Intern 3 -->
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0">
        <img src="https://images.pexels.com/photos/8195309/pexels-photo-8195309.jpeg?auto=compress&cs=tinysrgb&h=512" class="card-img-top" alt="Maham Yousuf">
        <div class="card-body">
          <h5 class="card-title mb-1">Maham Yousuf</h5>
          <p class="text-muted mb-1">WordPress Development</p>
          <small class="text-secondary">Nov 2023 – Jan 2024</small>
        </div>
      </div>
    </div>
  

  </div>
</section>


<!-- CTA -->
<section class="text-white text-center py-5" style="background-color: #1e40af;" data-aos="fade-up">
  <div class="container">
    <h3 class="mb-3">Want to apply for an internship?</h3>
    <a href="contact.php" class="btn btn-light btn-lg">Apply Now</a>
  </div>
</section>

<?php include("includes/footer.php"); ?>
