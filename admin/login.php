<!doctype html>
<html lang="en">
<head>
    <title>Legendary MS - Login</title>
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

    <?php
    session_start();
    $_SESSION['test'] = 'false';
    
    $mysqli = new mysqli("localhost", "root", "", "legendary");

    if (isset($_POST['submit'])) {
        $user = mysqli_real_escape_string($mysqli, htmlentities($_POST['username']));
        $pass = mysqli_real_escape_string($mysqli, htmlentities($_POST['password']));

        $sql = "SELECT * FROM `login` WHERE `username`='$user' AND `password`='$pass'";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_row();
            $_SESSION['test'] = 'true';
            echo "<script>window.location.href='admin_home.php';</script>";
            exit();
        } else {
            echo "<script>alert('Incorrect username or password');</script>";
        }
    }
    ?>

</head>
<body>
<a href="../index.html" class="btn btn-primary" style="margin: 10px;">Back</a>
    <div class="container mt-5">
        <h1 class="text-center">Login Page (Admin Only)</h1><br><br><br>
        <form method="POST">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>