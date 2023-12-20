<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "legendary";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$contact = $_POST['cno'];
$email = $_POST['email'];
$brand = $_POST['brand'];
$model = $_POST['optionList'];
$livery = $_POST['livery'];
$color = $_POST['color'];

switch ($brand) {
    case '1':
        $brand = "Preminum models";
        switch ($model) {
            case '1':
                $model = "Ignus";
                break;
            case '2':
                $model = "Nero";
                break;
            case '3':
                $model = "Thrax";
                break;
            case '4':
                $model = "Champion";
                break;
            case '5':
                $model = "Zeno";
                break;
            default:
                $model = null;
                break;
        }
        break;
    case '2':
        $brand = "Pegassi";
        switch ($model) {
            case '1':
                $model = "Infernus";
                break;
            case '2':
                $model = "Vacca";
                break;
            case '3':
                $model = "Zentorno";
                break;
            case '4':
                $model = "Monroe";
                break;
            case '5':
                $model = "Osiris";
                break;
            default:
                $model = null;
                break;
        }
        break;
    case '3':
        $brand = "Grotti";
        switch ($model) {
            case '1':
                $model = "Stinger";
                break;
            case '2':
                $model = "Turismo R";
                break;
            case '3':
                $model = "Cheetah";
                break;
            case '4':
                $model = "Carbonizzare";
                break;
            case '5':
                $model = "Furia";
                break;
            default:
                $model = null;
                break;
        }
        break;
    case '4':
        $brand = "Progen";
        switch ($model) {
            case '1':
                $model = "T20";
                break;
            case '2':
                $model = "Emerus";
                break;
            case '3':
                $model = "GP1";
                break;
            case '4':
                $model = "Italia GTB";
                break;
            case '5':
                $model = "Tyrus";
                break;
            default:
                $model = null;
                break;
        }
        break;
    case '5':
        $brand = "Bravado";
        switch ($model) {
            case '1':
                $model = "Banshee";
                break;
            case '2':
                $model = "Gauntlet";
                break;
            case '3':
                $model = "Buffalo";
                break;
            case '4':
                $model = "G Hellfire";
                break;
            case '5':
                $model = "Verlierer";
                break;
            default:
                $model = null;
                break;
        }
        break;
    case '6':
        $brand = "Vapid";
        switch ($model) {
            case '1':
                $model = "Stallion";
                break;
            case '2':
                $model = "Bullet";
                break;
            case '3':
                $model = "Dominator";
                break;
            case '4':
                $model = "FMJ";
                break;
            case '5':
                $model = "Flash GT";
                break;
            default:
                $model = null;
                break;
        }
        break;
    case '7':
        $brand = "Pfister";
        switch ($model) {
            case '1':
                $model = "Comet";
                break;
            case '2':
                $model = "Growler";
                break;
            case '3':
                $model = "Astron";
                break;
            case '4':
                $model = "811";
                break;
            case '5':
                $model = "Neon";
                break;
            default:
                $model = null;
                break;
        }
        break;
    case '8':
        $brand = "Dinka";
        switch ($model) {
            case '1':
                $model = "Jester";
                break;
            case '2':
                $model = "Jester RR";
                break;
            case '3':
                $model = "Jester Classic";
                break;
            case '4':
                $model = "Sugoi";
                break;
            case '5':
                $model = "RT3000";
                break;
            default:
                $model = null;
                break;
        }
        break;
    
    default:
        $brand = null;
        break;
}

// Insert data into table
$sql = "INSERT INTO purchase (fullname, contact, email, brand, model, livery, color) VALUES ('$fullname', '$contact', '$email', '$brand', '$model', '$livery', '$color')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script>window.location.href='purchase.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();
echo "<script>window.location.href='purchase.html';</script>";
?>