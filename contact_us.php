<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=1024">
<link rel="stylesheet" href="mystyle.css">
<link rel="Website Icon" href="Resources/LM.png">
<script src="myscript.js"></script>
<title>Legendary MS - Contact Us</title>

<body>
    <!-- Top navigation -->
    <div class="topnav">
        <!-- Centered link -->
        <div class="topnav-centered">
            <a href="index.html">Home</a>
        </div>

        <!-- Left-aligned links (default) -->
        <a href="cars_at_us.php">Cars At Us</a>
        <a href="about.html">About</a>

        <!-- Right-aligned links -->
        <div class="topnav-right">
            <a href="enquiry.html">Enquiry</a>
            <a href="contact_us.php" class="active">Contact Us</a>
        </div>

    </div>
    <div class="navlogo">
    <img src="Resources/Logo.png" height="100vh"><h2 style="color: azure; font-size: 4em; border-bottom: none;">Contact Us</h2><img src="Resources/Logo.png" height="100vh">
    </div>

  
    <div><center><img src="Resources/Logo Home.png" width="50%"></center>
        <div style="width:20cm ; border: 2px solid; margin: auto; padding: 30px;border-radius: 15px;">
            <br>
            <center>
            <h2>Leave us a comment or query!</h2><br>
            <form name="myForm" method="post" action="contact_us_be.php" onsubmit="return valcon()"> 
                
                <input type="text" name="uname" id="uname" placeholder="Your name" required>&nbsp;
                <textarea id="thoughts" name="thoughts" placeholder="Write your thoughts!" style="resize: vertical;"></textarea><br><br>
                <input type="submit" id="post">&nbsp;
                <input type="reset">
            </form>
            </center>
            <br>
        </div><br>
    </div>

    <div style='width:20cm ; margin: auto; padding: 30px; margin-bottom: 20px; background-color: rgb(227, 227, 227); border-radius: 15px;'>
    <h2>Comments</h2><br>
    <?php
    $conn = mysqli_connect('localhost','root','','legendary');
    
    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }
    
    $sql = "SELECT uname, thoughts FROM comments";
    $res = mysqli_query($conn, $sql);
    echo "<table>";
    $profile_icons = array("Resources\p1.png", "Resources\p2.png", "Resources\p3.png", "Resources\p4.png", "Resources\p5.png");
    $i = 0;
    while($row = mysqli_fetch_assoc($res)){
        if ($i>4) {
            $i=0;
        }
        echo "<tr>";
        echo "<td><img src='$profile_icons[$i]' alt='p1' style='width:20px'></td>";
        echo "<td style='padding-left:5px; padding-bottom:4px;'><b>" . $row['uname'] . "</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td style='padding-left:5px'>" . $row['thoughts'] . "<br></br></td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";
    ?>
    </div>

    <footer class="footer">
        <p>Copyright &#169 2022 Legendary Motorsport. All rights reserved.</p>
    </footer>
</body>
</html>