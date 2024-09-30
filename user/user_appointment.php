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
                  <li class="breadcrumb-item active"><a href="user_appointment.php">Appointment</a></li>
                  <li class="breadcrumb-item"><a href="user_setting.php" class="text-dark">Settings</a></li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="card"> 
            <div class="card-body"> 

            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="text-align: center; margin-bottom: 20px;">Upcoming Appointments</h2>
                
                <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                    <div style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); flex: 1; margin-right: 10px;">
                        <div style="margin-bottom: 10px;">
                            <span><strong>Date:</strong> October 10, 2024</span><br>
                            <span><strong>Time:</strong> 10:00 AM</span><br>
                            <span><strong>Doctor:</strong> Dr. Jane Smith</span><br>
                            <span><strong>Specialty:</strong> Dermatology</span><br>
                            <span><strong>Location:</strong> Health Clinic, Room 305</span><br>
                            <span><strong>Status:</strong> Confirmed</span>
                        </div>
                        <div>
                            <a href="#" style="text-decoration: none; color: #007bff; margin-right: 10px;">Reschedule</a>
                            <a href="#" style="text-decoration: none; color: #007bff; margin-right: 10px;">Cancel</a>
                            <a href="#" style="text-decoration: none; color: #007bff;">View Details</a>
                        </div>
                    </div>

                    <div style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); flex: 1; margin-left: 10px;">
                        <div style="margin-bottom: 10px;">
                            <span><strong>Date:</strong> October 15, 2024</span><br>
                            <span><strong>Time:</strong> 2:00 PM</span><br>
                            <span><strong>Doctor:</strong> Dr. John Doe</span><br>
                            <span><strong>Specialty:</strong> Cardiology</span><br>
                            <span><strong>Location:</strong> Main Hospital, Room 210</span><br>
                            <span><strong>Status:</strong> Pending Confirmation</span>
                        </div>
                        <div>
                            <a href="#" style="text-decoration: none; color: #007bff; margin-right: 10px;">Reschedule</a>
                            <a href="#" style="text-decoration: none; color: #007bff; margin-right: 10px;">Cancel</a>
                            <a href="#" style="text-decoration: none; color: #007bff;">View Details</a>
                        </div>
                    </div>
                </div>


                <h2 style="text-align: center; margin-bottom: 20px;">Past Appointments</h2>
                
                <table style="width: 100%; border-collapse: collapse; background-color: #fff; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <thead>
                        <tr style="background-color: #f8f9fa;">
                            <th style="padding: 10px; border: 1px solid #ddd;">Date</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Time</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Doctor</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Specialty</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Location</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Status</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 10px; border: 1px solid #ddd;">September 20, 2024</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">11:00 AM</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">Dr. Sarah Lee</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">Pediatrics</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">Health Clinic, Room 101</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">Completed</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">
                                <a href="#" style="text-decoration: none; color: #007bff; margin-right: 10px;">View Details</a>
                                <a href="#" style="text-decoration: none; color: #007bff;">Leave Feedback</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; border: 1px solid #ddd;">August 5, 2024</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">9:00 AM</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">Dr. Michael Brown</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">Orthopedics</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">Main Hospital, Room 305</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">Completed</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">
                                <a href="#" style="text-decoration: none; color: #007bff; margin-right: 10px;">View Details</a>
                                <a href="#" style="text-decoration: none; color: #007bff;">Leave Feedback</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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