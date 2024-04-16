<?php
header("location: ./profile.php")
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Dashboard';
include '../includes/head.php';
?>

<body>
    <?php
    require_once('../includes/header-doctor.php');
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
            require_once('../includes/sidepanel-doctor.php');
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            </main>
        </div>
    </div>
</body>

</html>