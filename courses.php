<?php include("includes/header.php"); ?>

<!-- Hero Section -->
<section class="text-white text-center py-5" style="background: linear-gradient(to right, #1e293b, #3b82f6);" data-aos="fade-up">
  <div class="container">
    <h1 class="display-5 fw-bold">Our Career-Focused Courses</h1>
    <p class="lead mt-3">Advanced training programs to help you master today’s most in-demand skills</p>
  </div>
</section>

<!-- Courses Grid -->
<section class="container py-5">
  <div class="row g-4">

    <!-- Course Cards -->
    <?php
    $courses = [
      [
        "icon" => "💻",
        "title" => "Web & App Development",
        "category" => "Full Stack",
        "categoryClass" => "success",
        "description" => "Master HTML, CSS, JavaScript, PHP, Laravel, and React. Build responsive websites and full-featured web apps with hands-on projects and real-world examples.",
        "duration" => "12 Weeks",
        "price" => "PKR 45,000"
      ],
      [
        "icon" => "🎨",
        "title" => "Graphic Designing",
        "category" => "Creative",
        "categoryClass" => "warning text-dark",
        "description" => "Learn to design logos, banners, and brand identities using Photoshop, Illustrator, and Canva. Create portfolios and real client projects in Figma.",
        "duration" => "10 Weeks",
        "price" => "PKR 32,000"
      ],
      [
        "icon" => "🛡️",
        "title" => "Cybersecurity",
        "category" => "Security",
        "categoryClass" => "danger",
        "description" => "Understand ethical hacking, firewalls, and secure protocols. Learn network protection, intrusion detection, and cyber risk assessment in real-world labs.",
        "duration" => "12 Weeks",
        "price" => "PKR 55,000"
      ],
      [
        "icon" => "📊",
        "title" => "Data Science & AI",
        "category" => "Future Tech",
        "categoryClass" => "info",
        "description" => "Analyze data with Python, Pandas, and NumPy. Build ML models, learn AI logic, and work on datasets to predict trends, outcomes, and patterns.",
        "duration" => "12 Weeks",
        "price" => "PKR 58,000"
      ],
      [
        "icon" => "📱",
        "title" => "Digital Marketing",
        "category" => "Online Growth",
        "categoryClass" => "primary",
        "description" => "Master SEO, PPC, content marketing, and email automation. Use Google Ads and Analytics to grow digital presence and increase ROI.",
        "duration" => "10 Weeks",
        "price" => "PKR 30,000"
      ],
      [
        "icon" => "☁️",
        "title" => "Cloud & DevOps",
        "category" => "Infrastructure",
        "categoryClass" => "secondary",
        "description" => "Learn Amazon Web Services (AWS), Azure, Docker, and Kubernetes. Automate deployments using Jenkins and build secure, scalable cloud-based pipelines.",
        "duration" => "12 Weeks",
        "price" => "PKR 60,000"
      ],
      [
        "icon" => "🧠",
        "title" => "Automation Tools",
        "category" => "Productivity",
        "categoryClass" => "dark",
        "description" => "Automate workflows with Zapier, Make, and Power Automate. No coding needed. Boost productivity and streamline tasks efficiently.",
        "duration" => "10 Weeks",
        "price" => "PKR 27,000"
      ],
      [
        "icon" => "📽️",
        "title" => "Video Editing",
        "category" => "Creative",
        "categoryClass" => "warning text-dark",
        "description" => "Edit videos using Adobe Premiere, CapCut, and After Effects. Craft compelling visual stories and master transitions and effects.",
        "duration" => "10 Weeks",
        "price" => "PKR 35,000"
      ],
      [
        "icon" => "🛡️",
        "title" => "Penetration Testing",
        "category" => "Cybersecurity",
        "categoryClass" => "danger",
        "description" => "Learn ethical hacking, exploit systems, and generate security reports. Practice using Kali Linux, Metasploit, and advanced testing tools.",
        "duration" => "10 Weeks",
        "price" => "PKR 38,000"
      ]
    ];

    $delay = 100;
    foreach ($courses as $course) {
      echo '
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="' . $delay . '">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">' . $course["icon"] . ' ' . $course["title"] . '</h5>
            <span class="badge bg-' . $course["categoryClass"] . ' mb-2">' . $course["category"] . '</span>

            <!-- Availability Badges -->
            <div class="mb-2">
              <span class="badge bg-success"><i class="bi bi-building"></i> In-Campus</span>
              <span class="badge bg-primary"><i class="bi bi-wifi"></i> Online</span>
            </div>

            <p class="card-text text-muted">' . $course["description"] . '</p>
            <p><strong>Duration:</strong> ' . $course["duration"] . '</p>
            <p><strong>Price:</strong> <span class="text-primary">' . $course["price"] . '</span></p>
            <a href="submit_enrollment.php" class="btn btn-outline-primary w-100">Enroll Now</a>
          </div>
        </div>
      </div>';
      $delay += 50;
    }
    ?>
  </div>
</section>

<!-- Call to Action -->
<section class="text-white text-center py-5" style="background-color: #1e40af;" data-aos="fade-up">
  <div class="container">
    <h3 class="mb-3">Still unsure which course suits you best?</h3>
    <a href="contact.php" class="btn btn-light btn-lg">Get Free Counseling</a>
  </div>
</section>

<?php include("includes/footer.php"); ?>
