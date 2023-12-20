<!Doctype html>
<html lang="en">
<head>
    <title>Legendary MS - Enquiry DB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="Website Icon" href="../Resources/LM.png">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js">
    </script>

<!-- Check if user logged in successfully -->
<?php
    session_start();
    $test = $_SESSION['test'];
    if($test!="true") {
        header("Location:login.php");
    }
?>
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'legendary');
    ?>
</head>

<body>
    <div class="container mt-5 text-centern">
        <a href="admin_home.php" class="btn btn-danger">Back to Dashboard</a>
    </div>
    <br>
    <div class="container">
    <h1><center>Enquiry Database</center></h1><br>
        <div class="text-end">
        </div>
        <div class="table-responsive">
            <table class="table table-primary table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">State</th>
                        <th scope="col">Enquiry Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `enquiry`";
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['fullname'] . "</td>";
                        echo "<td>" . $row['contact'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['state'] . "</td>";
                        echo "<td>" . $row['enquirytype'] . "</td>";
                        echo "<td><a href='enquiry_edit.php?id=" . $row['id'] . "'>Edit</a> <a href='enquiry_delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>  
</body>
</html>