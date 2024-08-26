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
      );
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
          foreach ($appointment_array as $item){
        ?>
          <tr>
            <td><?= $counter ?></td>
            <td><?= $item['Code'] ?></td>
            <td><?= $item['Type'] ?></td>
            <td><?= $item['Patient Name'] ?></td>
            <td><?= $item['Doctor Name'] ?></td>
            <td><?= $item['Appointment date'] ?></td>
            <td  class="bg-green text-light text-center"><?= $item['Status'] ?></td>
            <td class="text-center">
              icon
            </td>
          </tr>
        <?php
          $counter++;
          }
        ?>
        <tr>
          <td>02</td>
          <td>0002</td>
          <td>Online</td>
          <td>Allen Barry</td>
          <td>Dr. Jame Oliveros</td>
          <td>Monday, 9:00 - 10:00 am</td>
          <td class="bg-info text-light text-center">In Progress</td>
          <td>Icon</td>
        </tr>
        <tr>
          <td>03</td>
          <td>0003</td>
          <td>Online</td>
          <td>Allen Barry</td>
          <td>Dr. James Oliveros</td>
          <td>Monday, 9:00 - 10:00 am</td>
          <td class="bg-Danger text-light text-center">Danger</td>
          <td>Icon</td>
        </tr>
        <tr>
          <td>04</td>
          <td>0004</td>
          <td>Online</td>
          <td>Allen Barry</td>
          <td>Dr. Jame Oliveros</td>
          <td>Monday, 9:00 - 10:00 am</td>
          <td class="bg-warning text-light text-center">Waiting</td>
          <td>Icon</td>
        </tr>
      </tbody>
    </table>
  </section>



</body>
</html>