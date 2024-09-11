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
        <?php include 'left_profile.php'; ?>
        
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
              <h4 class="text-muted mb-3">Personal Information</h4>
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
                      <p class="text-muted mb-0">+63 998 765 4321</p>
                    </div>
                  </div>
                  <hr>
                </div>

                <div class="col">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Occupation</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Student</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">School Id</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">2021-00890</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Normal Rd, Zamboanga, 7000 Zamboanga del Sur</p>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card bg-body-tertiary mb-4 mb-md-0">
                <div class="card-body">
                  <h4 class="text-muted mb-3">Used Drus</h4>
                  <hr>
                  <?php
                    $usedDrugs_array = array(
                      array(
                        'brandName' => 'Amoxicillin',
                        'genericName' => 'Amoxicillin',
                        'strenght' => '250mg',
                        'pack' => '100',
                        'from' => 'Tab',
                        'manufacturer' => 'Apotex Industries',
                      ),
                      array(
                        'brandName' => 'Ibuprofen',
                        'genericName' => 'Ibuprofen',
                        'strenght' => '200mg',
                        'pack' => '50',
                        'from' => 'Caplet',
                        'manufacturer' => 'Pfizer',
                      ),
                      array(
                        'brandName' => 'Paracetamol',
                        'genericName' => 'Acetaminophen',
                        'strenght' => '500mg',
                        'pack' => '30',
                        'from' => 'Tablet',
                        'manufacturer' => 'GlaxoSmithKline',
                      ),
                      array(
                        'brandName' => 'Ciprofloxacin',
                        'genericName' => 'Ciprofloxacin',
                        'strenght' => '500mg',
                        'pack' => '20',
                        'from' => 'Tab',
                        'manufacturer' => 'Bayer Pharmaceuticals',
                      ),
                      array(
                        'brandName' => 'Lisinopril',
                        'genericName' => 'Lisinopril',
                        'strenght' => '10mg',
                        'pack' => '60',
                        'from' => 'Tablet',
                        'manufacturer' => 'Merck',
                      ),
                      array(
                        'brandName' => 'Metformin',
                        'genericName' => 'Metformin',
                        'strenght' => '850mg',
                        'pack' => '100',
                        'from' => 'Tab',
                        'manufacturer' => 'Teva Pharmaceuticals',
                      ),
                    );
                  ?>
                  
                  <table id="profileGeneral_table" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col" width="3%">#</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Generic Name</th>
                        <th scope="col">Strenght</th>
                        <th scope="col">Pack</th>
                        <th scope="col">From</th>
                        <th scope="col">Manufacturer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $counter = 1;
                      foreach ($usedDrugs_array as $item) {
                      ?>
                        <tr>
                          <td><?= $counter ?></td>
                          <td><?= $item['brandName'] ?></td>
                          <td><?= $item['genericName'] ?></td>
                          <td><?= $item['strenght'] ?></td>
                          <td><?= $item['pack'] ?></td>
                          <td><?= $item['from'] ?></td>
                          <td><?= $item['manufacturer'] ?></td>
                        </tr>
                      <?php
                        $counter++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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