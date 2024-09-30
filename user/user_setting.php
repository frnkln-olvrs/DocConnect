<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'DocConnect | Setting';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>

  <section id="profile" class="page-container">
    <div class="container py-5">

      <div class="row">
        <?php include 'left_profile.php'; ?>
        
        <div class="col-lg-9">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-body-tertiary border-1 border rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item" aria-current="page"><a href="profile.php">General</a></li>
                  <li class="breadcrumb-item"><a href="user_appointment.php">Appointment</a></li>
                  <li class="breadcrumb-item active"><a href="user_setting.php" class="text-dark">Settings</a></li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="card"> 
            <div class="card-body"> 

            <form id="settings-form">
              <h3>Profile Information</h3>
              <div style="margin-bottom: 15px;">
                  <label for="username" style="display: block; margin-bottom: 5px;">Username:</label>
                  <input type="text" id="username" name="username" placeholder="Enter your username" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
              </div>
              <div style="margin-bottom: 15px;">
                  <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
                  <input type="email" id="email" name="email" placeholder="Enter your email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
              </div>
              <div style="margin-bottom: 15px;">
                  <label for="phone" style="display: block; margin-bottom: 5px;">Phone:</label>
                  <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
              </div>

              
              <h3>Change Password</h3>
              <div style="margin-bottom: 15px;">
                  <label for="current-password" style="display: block; margin-bottom: 5px;">Current Password:</label>
                  <input type="password" id="current-password" name="current-password" placeholder="Enter your current password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
              </div>
              <div style="margin-bottom: 15px;">
                  <label for="new-password" style="display: block; margin-bottom: 5px;">New Password:</label>
                  <input type="password" id="new-password" name="new-password" placeholder="Enter a new password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
              </div>
              <div style="margin-bottom: 15px;">
                  <label for="confirm-password" style="display: block; margin-bottom: 5px;">Confirm New Password:</label>
                  <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your new password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
              </div>

              
              <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                <div style="flex: 1; margin-right: 20px;">
                    <h3 style=" margin-bottom: 15px;">Notification Preferences</h3>
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; margin-bottom: 5px;">Email Notifications:</label>
                        <label style="margin-right: 10px;"><input type="checkbox" name="email-notifications" checked> Enable</label>
                        <label><input type="checkbox" name="email-notifications"> Disable</label>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; margin-bottom: 5px;">SMS Notifications:</label>
                        <label style="margin-right: 10px;"><input type="checkbox" name="sms-notifications"> Enable</label>
                        <label><input type="checkbox" name="sms-notifications" checked> Disable</label>
                    </div>
                </div>
                <div style="flex: 1;">
                    <h3 style="  margin-bottom: 15px;">Theme Preference</h3>
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; margin-bottom: 5px;">Select Theme:</label>
                        <label style="margin-right: 10px;"><input type="radio" name="theme" value="light" checked> Light</label>
                        <label><input type="radio" name="theme" value="dark"> Dark</label>
                    </div>
                </div>
            </div>

              <div style="text-align: center; ">
                <button type="submit" class="btn btn-primary" style="color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Save Changes</button>
            </div>
            </div>
          </div>
          
            
            
        </form>
    </div>


        </div>
      </div>
    </div>
  </section>

<script src="../js/profileGeneral-dataTables.js"></script>
  
<?php 
require_once ('../includes/footer.php');
?>

</body>
</html>