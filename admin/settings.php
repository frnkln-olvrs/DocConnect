<html lang="en">
<?php 
  $title = 'Admin | Settings';
  include './includes/admin_head.php';
  function getCurrentPage() {
    return basename($_SERVER['PHP_SELF']);
  }
?>

<link rel="stylesheet" href="./css/OnOffToggle.css">
<body>
  <?php 
    require_once ('./includes/admin_header.php');
  ?>
  <?php 
    require_once ('./includes/admin_sidepanel.php');
  ?>

  <section id="dashboard" class="page-container">
    <h1 class="text-start">User Group Management</h1>

    <!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h2>Wired style</h2>
      <div>
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label> Switch1
      </div>
      <div>
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label> Switch2
      </div>
      <div>
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label> Switch3
      </div>
    </div></col-->
    <div class="col-sm-6">
      <h2>Flat style</h2>
      <div>
        <label class="switch flat">
            <input type="checkbox">
            <span class="slider"></span>
        </label> Switch1
      </div>
      <div>
        <label class="switch flat">
            <input type="checkbox">
            <span class="slider"></span>
        </label> Switch2
      </div>
      <div>
        <label class="switch flat">
            <input type="checkbox">
            <span class="slider"></span>
        </label> Switch3
      </div>
    </div></col-->
  </div></row-->
</div></container-->

</body>
</html>
