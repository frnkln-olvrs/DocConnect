<?php
session_start();

if (isset($_SESSION['verification_status']) && $_SESSION['verification_status'] != 'Verified') {
  header('location: ../user/verification.php');
} else if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 0) {
  header('location: ../index.php');
}

require_once('../tools/functions.php');
require_once('../classes/account.class.php');

?>
<html lang="en">
<?php
$title = 'Admin | About Us';
include './includes/admin_head.php';

function getCurrentPage()
{
  return basename($_SERVER['PHP_SELF']);
}
?>

<body>
  <?php
  require_once('./includes/admin_header.php');
  ?>
  <?php
  require_once('./includes/admin_sidepanel.php');
  ?>

  <section id="dashboard" class="page-container">

    <?php
    $aboutUs = 'active';
    $aAboutUs = 'page';
    $cAboutUs = 'text-dark';

    include 'adminSettings_nav.php';
    ?>

    <h1 class="text-start">Edit About Us</h1>

    <form method="POST" action="save_about_us.php" enctype="multipart/form-data">
      <!-- About Us Section -->
      <div class="mb-3">
        <label for="about_content" class="form-label">About Us Content</label>
        <textarea id="about_content" name="about_content"><?= $result['content'] ?? '' ?></textarea>
      </div>

      <!-- Vision Section -->
      <div class="mb-3">
        <label for="vision" class="form-label">Our Vision</label>
        <textarea id="vision" name="vision"><?= $result['vision'] ?? '' ?></textarea>
      </div>

      <!-- Mission Section -->
      <div class="mb-3">
        <label for="mission" class="form-label">Our Mission</label>
        <textarea id="mission" name="mission"><?= $result['mission'] ?? '' ?></textarea>
      </div>

      <!-- Technology & Innovation -->
      <div class="mb-3">
        <label for="tech_innovation" class="form-label">Technology and Innovation</label>
        <textarea id="tech_innovation" name="tech_innovation"><?= $result['tech_innovation'] ?? '' ?></textarea>
      </div>

      <!-- Discover More -->
      <div class="mb-3">
        <label for="discover_more" class="form-label">Discover More</label>
        <textarea id="discover_more" name="discover_more"><?= $result['discover_more'] ?? '' ?></textarea>
      </div>

      <!-- Background Image Upload -->
      <div class="mb-3">
        <label for="bg_image" class="form-label">Upload Background Image</label>
        <input type="file" name="bg_image" class="form-control" id="bg_image" accept=".png, .jpeg, .jpg" required>
        <small class="text-danger" id="fileError" style="display: none;">Only PNG and JPEG files are allowed.</small>
      </div>

      <!-- Submit & Cancel Buttons -->
      <div class="d-flex gap-2 mt-3">
        <button type="submit" class="btn btn-primary text-light">Save</button>
        <button type="button" class="btn btn-secondary text-light" onclick="location.reload();">Cancel</button>
      </div>
    </form>

    <script src="./js/summerNote.js"></script>
    <script>
      document.getElementById("bg_image").addEventListener("change", function() {
        var file = this.files[0];
        if (file) {
          var allowedTypes = ["image/png", "image/jpeg"];
          if (!allowedTypes.includes(file.type)) {
            document.getElementById("fileError").style.display = "block";
            this.value = "";
          } else {
            document.getElementById("fileError").style.display = "none";
          }
        }
      });
    </script>

  </section>
</body>

</html>