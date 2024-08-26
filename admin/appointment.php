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
        
        <div class="input-group w-25">
          <input type="text" name="keyword" id="keyword" placeholder="Search Product" class="form-control">
          <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class='bx bx-search' aria-hidden="true" ></i></button>
        </div>
      </div>
    </div>

    <table id="home_table" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Code</th>
          <th>Type</th>
          <th>Patient Name</th>
          <th>Doctor Name</th>
          <th>Appointment date</th>
          <th>Status</th>
          <th>View</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>0001</td>
          <td>F-2-F</td>
          <td>Allen Barry</td>
          <td>Dr. Jame Oliveros</td>
          <td>Monday, 9:00 - 10:00 am</td>
          <td class="bg-green text-light text-center">Completed</td>
          <td>Icon</td>
        </tr>
        <tr>
          <td>0002</td>
          <td>Online</td>
          <td>Allen Barry</td>
          <td>Dr. Jame Oliveros</td>
          <td>Monday, 9:00 - 10:00 am</td>
          <td class="bg-info text-light text-center">In Progress</td>
          <td>Icon</td>
        </tr>
        <tr>
          <td>0003</td>
          <td>Online</td>
          <td>Allen Barry</td>
          <td>Dr. James Oliveros</td>
          <td>Monday, 9:00 - 10:00 am</td>
          <td class="bg-Danger text-light text-center">Danger</td>
          <td>Icon</td>
        </tr>
        <tr>
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