<!DOCTYPE html>
<html lang="en">
<?php 
  $title = 'DocConnect | Profile';
	include '../includes/head.php';
?>
<body>
  <?php 
    require_once ('../includes/header.php');
  ?>

  <section id="profile" class="page-container">
    <div class="container py-5">

      <div class="row">
        <div class="col-lg-3">
          <div class="card bg-body-tertiary mb-4">
            <div class="card-body text-center">
              <img src="../assets/images/defualt_profile.png" alt="avatar" class="rounded-3 shadow-lg img-fluid" style="width: 150px;">
              <h4 class="my-3">Fname Lname</h4>
              <hr>
              <!-- <p class="text-success mb-4">Active</p> -->
              <div class="details">
                <div class="d-flex mx-5 mx-md-4">
                  <p class="text-muted text-start w-75">Gender</p>
                  <div class="text-start w-25">
                    <p class="text-black">Male</p>
                  </div>
                </div>
                <div class="d-flex mx-5 mx-md-4">
                  <p class="text-muted text-start w-75">Age</p>
                  <div class="text-start w-25">
                    <p class="text-black">21</p>
                  </div>
                </div>
                <div class="d-flex mx-5 mx-md-4">
                  <p class="text-muted text-start w-75">Height</p>
                  <div class="text-start w-25">
                    <p class="text-black">171cm</p>
                  </div>
                </div>
                <div class="d-flex mx-5 mx-md-4">
                  <p class="text-muted text-start w-75">Weight</p>
                  <div class="text-start w-25">
                    <p class="text-black">157kg</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-body-tertiary mb-4">
            <div class="card-body text-start">
              <div class="d-flex justify-content-between">
                <h4 class="text-muted mb-2">Allergies</h4>
                <div class="dropdown">
                  <i class='bx bx-dots-horizontal-rounded fs-4' id="dotsDropdown" data-bs-toggle="dropdown" aria-expanded="false"></i>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dotsDropdown">
                    <li><a class="dropdown-item" href="#">Add</a></li>
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                  </ul>
                </div>
              </div>

              <?php
                $allergies = [
                  ['name' => 'Penicillin', 'level' => 'High'],
                  ['name' => 'Dust', 'level' => 'Medium'],
                  ['name' => 'Pollen', 'level' => 'Low'],
                  ['name' => 'Cat Fur', 'level' => 'Medium']
                ];

                foreach ($allergies as $allergy) {
                  $levelClass = '';
                  switch (strtolower($allergy['level'])) {
                    case 'high':
                      $levelClass = 'text-danger';
                      break;
                    case 'medium':
                      $levelClass = 'text-warning';
                      break;
                    case 'low':
                      $levelClass = 'text-success';
                      break;
                    default:
                      $levelClass = 'text-secondary';
                      break;
                  }
              ?>

              <div class="d-flex justify-content-between mx-4 mx-md-3">
                <p class="text-muted text-start w-50"><?php echo $allergy['name']; ?></p>
                <div class="text-start w-50">
                  <p class="<?php echo $levelClass; ?>"><?php echo $allergy['level']; ?></p>
                </div>
              </div>

              <?php 
                }
              ?>

            </div>
          </div>
          <div class="card bg-body-tertiary mb-4 mb-lg-0">
            <div class="card-body p-3">
              <h4 class="text-muted mb-2">Notes</h4>
                <textarea class="form-control" id="notes" rows="3" disabled readonly>Not editable by user?</textarea>
            </div>
          </div>
        </div>
        
        <div class="col-lg-9">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-body-tertiary border-1 border rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-dark">General</a></li>
                  <li class="breadcrumb-item"><a href="#">Appointment</a></li>
                  <li class="breadcrumb-item"><a href="#">Settings</a></li>
                </ol>
              </nav>
            </div>
          </div>
          
          <div class="card bg-body-tertiary mb-4">
            <div class="card-body">
              <div class="row row-cols-2">
                <div class="col">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Fname Mname Lname</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">example@example.com</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">(097) 234-5678</p>
                    </div>
                  </div>
                  <hr>
                  
                </div>
                <div class="col">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">(098) 765-4321</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <?php 
    require_once ('../includes/footer.php');
  ?>

</body>
</html>