<html lang="en">
<?php 
  $title = 'Admin | Doctors';
	include './includes/admin_head.php';
  function getCurrentPage() {
    return basename($_SERVER['PHP_SELF']);
  }
?>
<body>
  <?php 
    require_once ('./includes/admin_header.php');
  ?>
  <?php 
    require_once ('./includes/admin_sidepanel.php');
  ?>

  <section id="doc-acc" class="page-container">
    <h1 class="text-start my-3">Doctors Accounts</h1>

    <div class="table-responsive overflow-hidden">
      <div class="search-keyword col-12 flex-lg-grow-0 d-flex justify-content-end">

        <div class="form-group mx-4">
          <select id="sort-by" class="form-select me-md-2">
            <option value="">Sort By</option>
            <option value="0">Name</option>
            <option value="1">Account ID</option>
          </select>
        </div>
        
        <div class="input-group w-25 d-flex align-items-center border border-1 rounded-1">
          <i class='bx bx-search-alt text-green ps-2'></i>
          <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control border-0">
        </div>

      </div>
    </div>

    <?php
      $appointment_array = array(
        array(
          'name' => 'Franklin Oliveros',
          'acc-id' => '000-001',
          'email' => 'frnki@email.com',
          'phone-no' => '0992 345 6789',
          'DoB' => 'Feb. 29, 2004',
          'specialties' => 'Family Medicine',
          'work-hour' => 'Mon-Fri, 9am - 5pa',
          'no.patients' => '10',
          'rating' => '9/10',
          'last-login' => '08/04/2024',
        ),
        array(
          'name' => 'Hilal Abdulajid',
          'acc-id' => '000-002',
          'email' => 'hiraru@email.com',
          'phone-no' => '0999 876 5432',
          'DoB' => '09/10/1978',
          'specialties' => 'Family Medicine',
          'work-hour' => 'Mon-Fri, 9am - 5pa',
          'no.patients' => '10',
          'rating' => '9/10',
          'last-login' => '08/04/2024',
        ),
      );
      ?>
      
      <table id="usersAcc_table" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th scope="col" width="3%">#</th>
            <th scope="col">Account Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Phone No.</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Specialties</th>
            <th scope="col">Working Hours</th>
            <th scope="col">Number of Patients</th>
            <th scope="col">Patient Satisfaction</th>
            <th scope="col">Last Login</th>
            <th scope="col" width="7%">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $counter = 1;
          foreach ($appointment_array as $item) {
          ?>
            <tr>
              <td><?= $counter ?></td>
              <td><?= $item['acc-id'] ?></td>
              <td><?= $item['name'] ?></td>
              <td><?= $item['email'] ?></td>
              <td><?= $item['phone-no'] ?></td>
              <td><?= $item['DoB'] ?></td>
              <td><?= $item['specialties'] ?></td>
              <td><?= $item['work-hour'] ?></td>
              <td><?= $item['no.patients'] ?></td>
              <td><?= $item['rating'] ?></td>
              <td><?= $item['last-login'] ?></td>
              

              <td class="h-100 d-flex justify-content-around align-items-center text-center">
                <a href="patient_details.php?code=<?= $item['acc-id'] ?>" title="View Details">
                  <i class='bx bx-edit-alt' ></i>
                </a>
                <button class="delete-btn bg-none" data-subject-id="<?= $item['acc-id'] ?>">
                  <i class='bx bx-user-x bg-none text-primary fs-5'></i>
                </button>
              </td>
            </tr>
          <?php
            $counter++;
          }
          ?>
        </tbody>
      </table>

      <!-- confirm delete modal markup -->
      <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Action</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to disable this account?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger text-light" id="confirmDeleteBtn">Disable</button>
            </div>
          </div>
        </div>
      </div>

  </section>

  <script src="./js/modal-delete_comfirmation.js"></script>

</body>
</html>