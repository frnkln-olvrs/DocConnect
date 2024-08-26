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
    <h1 class="text-center mb-3">Appointment Management</h1>

    <div class="table-responsive overflow-hidden">
      <div class="search-keyword col-12 flex-lg-grow-0 d-flex justify-content-end">

        <div class="form-group mx-4">
          <select name="student-remark" id="student-remark" class="form-select me-md-2">
            <option value="">Remarks</option>
            <option value="Passed">Passed</option>
            <option value="Failed">Failed</option>
          </select>
        </div>
        
        <div class="input-group w-25 d-flex align-items-center border border-1 border-dark-subtle rounded-1">
          <i class='bx bx-search-alt ps-2' ></i>
          <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control border-0">
        </div>
      </div>
    </div>

    <?php
      $appointment_array = array(
        array(
          'Code' => '0001',
          'Type' => 'F-2-F',
          'Patient Name' => 'Allen Barry',
          'Doctor Name' => 'Dr. Jame Oliveros',
          'Appointment date' => 'Monday, 9:00 - 10:00 am',
          'Status' => 'Completed',
        ),
        array(
          'Code' => '0002',
          'Type' => 'Online',
          'Patient Name' => 'Allen Barry',
          'Doctor Name' => 'Dr. Jame Oliveros',
          'Appointment date' => 'Monday, 9:00 - 10:00 am',
          'Status' => 'In Progress',
        ),
        array(
          'Code' => '0003',
          'Type' => 'Online',
          'Patient Name' => 'Allen Barry',
          'Doctor Name' => 'Dr. James Oliveros',
          'Appointment date' => 'Monday, 9:00 - 10:00 am',
          'Status' => 'Canceled',
        ),
        array(
          'Code' => '0004',
          'Type' => 'Online',
          'Patient Name' => 'Allen Barry',
          'Doctor Name' => 'Dr. Jame Oliveros',
          'Appointment date' => 'Monday, 9:00 - 10:00 am',
          'Status' => 'Waiting',
        ),
      );
      
      function getStatusClass($status) {
        switch ($status) {
          case 'Completed':
            return 'bg-success';
          case 'In Progress':
            return 'bg-info';
          case 'Canceled':
            return 'bg-danger';
          case 'Waiting':
            return 'bg-warning';
          default:
            return 'bg-secondary';
        }
      }
      ?>
      
      <table id="home_table" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th scope="col" width="3%">#</th>
            <th scope="col">Code</th>
            <th scope="col">Type</th>
            <th scope="col">Patient Name</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">Appointment date</th>
            <th scope="col">Status</th>
            <th scope="col" width="5%">View</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $counter = 1;
          foreach ($appointment_array as $item) {
            $statusClass = getStatusClass($item['Status']);
          ?>
            <tr>
              <td><?= $counter ?></td>
              <td><?= $item['Code'] ?></td>
              <td><?= $item['Type'] ?></td>
              <td><?= $item['Patient Name'] ?></td>
              <td><?= $item['Doctor Name'] ?></td>
              <td><?= $item['Appointment date'] ?></td>
              <td class="<?= $statusClass ?> text-light text-center"><?= $item['Status'] ?></td>
              <td class="text-center">
                <a href="patient_details.php?code=<?= $item['Code'] ?>" title="View Details">
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



</body>
</html>