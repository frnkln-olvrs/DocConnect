<html lang="en">
<?php 
  $title = 'Admin | Staff';
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

  <section id="appointment" class="page-container">
    <h1 class="text-start mb-3">Staff</h1>

    <div class="table-responsive overflow-hidden">
      <div class="col-12 flex-lg-grow-0 d-flex justify-content-end">
        <div class="input-group w-25 d-flex align-items-center border border-1 rounded-1 me-3">
          <i class='bx bx-search-alt text-green ps-2'></i>
          <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control border-0">
        </div>

        <a href="./add_staffAcc" class="input-group bg-success d-flex align-items-center border border-1 rounded-1" style="width: 10%;">
          <i class='bx bx-plus text-white fs-4 ps-2 me-2'></i>
          <p class="m-0 text-white">Add staff</p>
        </a>
      </div>
    </div>

    <?php
      $staff_array = array(
        array(
          'id' => '0001',
          'name' => 'Namor McKenzie',
          'position' => 'King',
          'phone-no' => '+63 9xx xxx xxxx',
          'email' => 'email@email.com',
          'status' => 'Active',
        ),
        array(
          'id' => '0013',
          'name' => 'Bruce Wayne',
          'position' => 'Batman',
          'phone-no' => '+63 9xx xxx xxxx',
          'email' => 'email@email.com',
          'status' => 'Inactive',
        ),
        array(
          'id' => '0027',
          'name' => 'Diana Prince',
          'position' => 'Manager',
          'phone-no' => '+63 9xx xxx xxxx',
          'email' => 'diana.prince@themyscira.com',
          'status' => 'Active',
        ),
        array(
          'id' => '0034',
          'name' => 'Clark Kent',
          'position' => 'Reporter',
          'phone-no' => '+63 9xx xxx xxxx',
          'email' => 'clark.kent@dailyplanet.com',
          'status' => 'Active',
        ),
        array(
          'id' => '0042',
          'name' => 'Tony Stark',
          'position' => 'Engineer',
          'phone-no' => '+63 9xx xxx xxxx',
          'email' => 'tony.stark@starkindustries.com',
          'status' => 'Inactive',
        ),
        array(
          'id' => '0056',
          'name' => 'Peter Parker',
          'position' => 'Photographer',
          'phone-no' => '+63 9xx xxx xxxx',
          'email' => 'peter.parker@dailybugle.com',
          'status' => 'Active',
        ),
        array(
          'id' => '0071',
          'name' => 'Natasha Romanoff',
          'position' => 'Spy',
          'phone-no' => '+63 9xx xxx xxxx',
          'email' => 'natasha.romanoff@shield.com',
          'status' => 'Inactive',
        ),
        
      );
      
      function getStatusClass($status) {
        switch ($status) {
          case 'Active':
            return 'bg-success';
          case 'Inactive':
            return 'bg-danger';
        }
      }
    ?>
      
    <table id="staff_table" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th scope="col" width="3%">#</th>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Position</th>
          <th scope="col">Phone No.</th>
          <th scope="col">Email</th>
          <th scope="col">Status</th>
          <th scope="col" width="5%">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $counter = 1;
        foreach ($staff_array as $item) {
          $statusClass = getStatusClass($item['status']);
        ?>
          <tr>
            <td><?= $counter ?></td>
            <td><?= $item['id'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['position'] ?></td>
            <td><?= $item['phone-no'] ?></td>
            <td><?= $item['email'] ?></td>
            <td class="<?= $statusClass ?> text-light text-center"><?= $item['status'] ?></td>
            <td class="d-flex justify-content-around align-items-center text-center">
              <a href="./add_staffAcc?= $item['acc-id'] ?>" title="View Details">
                <i class='bx bx-edit-alt' ></i>
              </a>
              <button class="delete-btn bg-none" data-subject-id="<?= $item['id'] ?>">
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
            Are you sure you want to disable (NAME) account?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger text-light" id="confirmDeleteBtn">Disable</button>
          </div>
        </div>
      </div>
    </div>

  </section>
  
  <script src="./js/staff-dataTables.js"></script>
  <script src="./js/modal-delete_comfirmation.js"></script>

</body>
</html>