<html lang="en">
<?php 
  $title = 'Admin | Appointment';
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
    <h1 class="text-center mb-3">Staff</h1>

    <div class="table-responsive overflow-hidden">
      <div class="search-keyword col-12 flex-lg-grow-0 d-flex justify-content-end">

        <div class="form-group mx-4">
          <select id="sort-by" class="form-select me-md-2">
            <option value="">Sort By</option>
            <option value="0">Code</option>
            <option value="1">Type</option>
            <option value="2">Patient Name</option>
            <option value="3">Doctor Name</option>
            <option value="4">Appointment Date</option>
          </select>
        </div>
        
        <div class="input-group w-25 d-flex align-items-center border border-1 rounded-1">
          <i class='bx bx-search-alt text-green ps-2'></i>
          <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control border-0">
        </div>

      </div>
    </div>

    <?php
      $staff_array = array(
        array(
          'id' => '0001',
          'name' => 'Namor Man',
          'position' => 'Encoder',
          'phone-no' => '+63 9xx xxx xxxx',
          'email' => 'email@email.com',
          'status' => 'Active',
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
            <th scope="col" width="5%">View</th>
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
              <td class="text-center">
                <a href="./viewAppointment?= $item['Code'] ?>" title="View Details">
                  <i class='bx bx-show'></i>
                </a>
              </td>
            </tr>
          <?php
            $counter++;
          }
          ?>
        </tbody>
      </table>
  </section>

  <script src="./js/appointment-dataTable.js"></script>

</body>
</html>