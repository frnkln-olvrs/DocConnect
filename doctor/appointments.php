<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Home';
include '../includes/head.php';
?>

<body>
    <?php
    require_once('../includes/header-doctor.php');
    ?>
    <div class="container-fluid bg-body-tertiary ">
        <div class="row">
            <?php
            require_once('../includes/sidepanel-doctor.php');
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="p-3 mt-4 mb-3 border border-1 bg-white">
                    <?php
                    $appointments = array(
                        array("John Doe", "10:00 AM", "10:30 AM", "2024-04-01", "09123456789", "https://meet.google.com/abcdefgh", "Completed"),
                        array("Jane Smith", "02:30 PM", "03:00 PM", "2024-04-02", "09129876543", "https://meet.google.com/ijklmnop", "Completed"),
                        array("Michael Johnson", "09:15 AM", "09:45 AM", "2024-04-03", "09123456789", "https://meet.google.com/qrstuvwxyz", "Completed"),
                        array("Emily Brown", "11:45 AM", "12:15 PM", "2024-04-04", "09121234567", "https://meet.google.com/12345678", "Ongoing"),
                        array("David Lee", "03:00 PM", "03:30 PM", "2024-04-05", "09127654321", "https://meet.google.com/abcdefgh", "Upcoming"),
                        array("Sarah Wilson", "08:30 AM", "09:00 AM", "2024-04-06", "09123456789", "https://meet.google.com/ijklmnop", "Upcoming"),
                        array("Matthew Taylor", "01:15 PM", "01:45 PM", "2024-04-07", "09129876543", "https://meet.google.com/qrstuvwxyz", "Upcoming"),
                        array("Alice Anderson", "09:00 AM", "09:30 AM", "2024-04-08", "09122334455", "https://meet.google.com/abcdefgh", "Upcoming"),
                        array("Christopher Martinez", "04:30 PM", "05:00 PM", "2024-04-09", "09121122334", "https://meet.google.com/ijklmnop", "Upcoming"),
                        array("Olivia White", "10:45 AM", "11:15 AM", "2024-04-10", "09123456789", "https://meet.google.com/qrstuvwxyz", "Upcoming")
                    );
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Date</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Meeting Link</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($appointments as $key => $appointment) {
                            ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $appointment[0] ?></td>
                                    <td><?= $appointment[1] ?></td>
                                    <td><?= $appointment[2] ?></td>
                                    <td><?= $appointment[3] ?></td>
                                    <td><?= $appointment[4] ?></td>
                                    <td> Join: <a href="<?= $appointment[5] ?>"><?= $appointment[5] ?></a></td>
                                    <td><?= $appointment[6] ?></td>
                                    <td><a href="">Update</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>

</html>