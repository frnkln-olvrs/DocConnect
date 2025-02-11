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
$title = 'Admin | Settings';
include './includes/admin_head.php';
function getCurrentPage()
{
  return basename($_SERVER['PHP_SELF']);
}
?>

<link rel="stylesheet" href="./css/OnOffToggle.css">

<body>
  <?php
  require_once('./includes/admin_header.php');
  ?>
  <?php
  require_once('./includes/admin_sidepanel.php');
  ?>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
  <section id="dashboard" class="page-container">

    <?php
    $privacyPolicy = 'active';
    $aPrivacyPolicy = 'page';
    $cPrivacyPolicy = 'text-dark';

    include 'adminSettings_nav.php';
    ?>

    <h1 class="text-start">Privacy Policy</h1>

    <textarea id="editor"></textarea>
    <script>
      $(document).ready(function() {
        $('#editor').summernote();
      });
    </script>
  </section>

</body>

</html>