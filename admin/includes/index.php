<?php include("../config/db.php"); ?>
<?php include("includes/header.php"); ?>

<h2 class="mb-4">Course Enrollments</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th><th>Name</th><th>Email</th><th>Course</th><th>Message</th><th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT e.*, c.title FROM enrollments e JOIN courses c ON e.course_id = c.id ORDER BY e.created_at DESC";
    $result = $conn->query($sql);
    $i = 1;
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$i}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['title']}</td>
        <td>{$row['message']}</td>
        <td>{$row['created_at']}</td>
      </tr>";
      $i++;
    }
    ?>
  </tbody>
</table>

<hr class="my-5" />

<h2 class="mb-4">Internship Applications</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th><th>Name</th><th>Email</th><th>University</th><th>Phone</th><th>Message</th><th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM internship_applications ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $i = 1;
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$i}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['university']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['message']}</td>
        <td>{$row['created_at']}</td>
      </tr>";
      $i++;
    }
    ?>
  </tbody>
</table>

<hr class="my-5" />

<h2 class="mb-4">Contact Messages</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM contact_messages ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $i = 1;
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$i}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['subject']}</td>
        <td>{$row['message']}</td>
        <td>{$row['created_at']}</td>
      </tr>";
      $i++;
    }
    ?>
  </tbody>
</table>

<?php include("includes/footer.php"); ?>
