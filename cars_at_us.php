<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=1024">
<link rel="stylesheet" href="mystyle.css">
<link rel="Website Icon" href="Resources/LM.png">
<title>Legendary MS - Cars at Us</title>

<body>
  <!-- Top navigation -->
  <div class="topnav">
    <!-- Centered link -->
    <div class="topnav-centered">
      <a href="index.html">Home</a>
    </div>

    <!-- Left-aligned links (default) -->
    <a href="cars_at_us.php" class="active">Cars At Us</a>
    <a href="about.html">About</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
      <a href="enquiry.html">Enquiry</a>
      <a href="contact_us.php">Contact Us</a>
    </div>

  </div>
  <a href="" class="navlogo">
    <img src="Resources/Logo.png" height="100vh"><img src="Resources/Logo Home.png" height="100vh"><img src="Resources/Logo.png" height="100vh">
  </a>

  <h1 class="cardh1"> Pegassi </h1>
  <section style="display: flex; align-items: center; justify-content: center;" class="container">
    <?php 
    $conn = new mysqli("localhost", "root", "", "legendary");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cars WHERE category='Pegassi'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while ($row = $result->fetch_assoc()) {
          echo '<div class="cardcars">';
          echo '<div class="cardimg" style="background-image: url(\'' . $row["image"] . '\');"></div>';
          echo '<h2>'. $row["name"] .'</h2>';
          echo '<p>Model: '  . $row["model"] . '</p>';
          echo '<p>Type: ' . $row["type"] .'</p>';
          echo '<p>Price: $'. $row["price"] .'</p>';
          echo '<a href="purchase.html" class="cardbtn">Check Out</a>';
          echo '</div>';
        }
    }
    $conn->close();
    ?>
  </section>

  <h1 class="cardh1"> Grotti </h1>
  <section style="display: flex; align-items: center; justify-content: center;" class="container">
    <?php 
    $conn = new mysqli("localhost", "root", "", "legendary");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cars WHERE category='Grotti'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while ($row = $result->fetch_assoc()) {
          echo '<div class="cardcars">';
          echo '<div class="cardimg" style="background-image: url(\'' . $row["image"] . '\');"></div>';
          echo '<h2>'. $row["name"] .'</h2>';
          echo '<p>Model: '  . $row["model"] . '</p>';
          echo '<p>Type: ' . $row["type"] .'</p>';
          echo '<p>Price: $'. $row["price"] .'</p>';
          echo '<a href="purchase.html" class="cardbtn">Check Out</a>';
          echo '</div>';
        }
    }
    $conn->close();
    ?>
  </section>

  <h1 class="cardh1"> Progen </h1>
  <section style="display: flex; align-items: center; justify-content: center;" class="container">
    <?php 
    $conn = new mysqli("localhost", "root", "", "legendary");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cars WHERE category='Progen'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while ($row = $result->fetch_assoc()) {
          echo '<div class="cardcars">';
          echo '<div class="cardimg" style="background-image: url(\'' . $row["image"] . '\');"></div>';
          echo '<h2>'. $row["name"] .'</h2>';
          echo '<p>Model: '  . $row["model"] . '</p>';
          echo '<p>Type: ' . $row["type"] .'</p>';
          echo '<p>Price: $'. $row["price"] .'</p>';
          echo '<a href="purchase.html" class="cardbtn">Check Out</a>';
          echo '</div>';
        }
    }
    $conn->close();
    ?>
  </section>

  <h1 class="cardh1"> Bravado </h1>
  <section style="display: flex; align-items: center; justify-content: center;" class="container">
    <?php 
    $conn = new mysqli("localhost", "root", "", "legendary");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cars WHERE category='Bravado'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while ($row = $result->fetch_assoc()) {
          echo '<div class="cardcars">';
          echo '<div class="cardimg" style="background-image: url(\'' . $row["image"] . '\');"></div>';
          echo '<h2>'. $row["name"] .'</h2>';
          echo '<p>Model: '  . $row["model"] . '</p>';
          echo '<p>Type: ' . $row["type"] .'</p>';
          echo '<p>Price: $'. $row["price"] .'</p>';
          echo '<a href="purchase.html" class="cardbtn">Check Out</a>';
          echo '</div>';
        }
    }
    $conn->close();
    ?>
  </section>

  <h1 class="cardh1"> Vapid </h1>
  <section style="display: flex; align-items: center; justify-content: center;" class="container">
    <?php 
    $conn = new mysqli("localhost", "root", "", "legendary");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cars WHERE category='Vapid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while ($row = $result->fetch_assoc()) {
          echo '<div class="cardcars">';
          echo '<div class="cardimg" style="background-image: url(\'' . $row["image"] . '\');"></div>';
          echo '<h2>'. $row["name"] .'</h2>';
          echo '<p>Model: '  . $row["model"] . '</p>';
          echo '<p>Type: ' . $row["type"] .'</p>';
          echo '<p>Price: $'. $row["price"] .'</p>';
          echo '<a href="purchase.html" class="cardbtn">Check Out</a>';
          echo '</div>';
        }
    }
    $conn->close();
    ?>
  </section>

  <h1 class="cardh1"> Pfister </h1>
  <section style="display: flex; align-items: center; justify-content: center;" class="container">
    <?php 
    $conn = new mysqli("localhost", "root", "", "legendary");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cars WHERE category='Pfister'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while ($row = $result->fetch_assoc()) {
          echo '<div class="cardcars">';
          echo '<div class="cardimg" style="background-image: url(\'' . $row["image"] . '\');"></div>';
          echo '<h2>'. $row["name"] .'</h2>';
          echo '<p>Model: '  . $row["model"] . '</p>';
          echo '<p>Type: ' . $row["type"] .'</p>';
          echo '<p>Price: $'. $row["price"] .'</p>';
          echo '<a href="purchase.html" class="cardbtn">Check Out</a>';
          echo '</div>';
        }
    }
    $conn->close();
    ?>
  </section>

  <h1 class="cardh1"> Dinka </h1>
  <section style="display: flex; align-items: center; justify-content: center;" class="container">
    <?php 
    $conn = new mysqli("localhost", "root", "", "legendary");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cars WHERE category='Dinka'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while ($row = $result->fetch_assoc()) {
          echo '<div class="cardcars">';
          echo '<div class="cardimg" style="background-image: url(\'' . $row["image"] . '\');"></div>';
          echo '<h2>'. $row["name"] .'</h2>';
          echo '<p>Model: '  . $row["model"] . '</p>';
          echo '<p>Type: ' . $row["type"] .'</p>';
          echo '<p>Price: $'. $row["price"] .'</p>';
          echo '<a href="purchase.html" class="cardbtn">Check Out</a>';
          echo '</div>';
        }
    }
    $conn->close();
    ?>
  </section>

  <h1 class="cardh1"> Premium Models </h1>
  <section style="display: flex; align-items: center; justify-content: center;" class="container">
    <?php 
    $conn = new mysqli("localhost", "root", "", "legendary");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cars WHERE category='Premium Models'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while ($row = $result->fetch_assoc()) {
          echo '<div class="cardcars">';
          echo '<div class="cardimg" style="background-image: url(\'' . $row["image"] . '\');"></div>';
          echo '<h2>'. $row["name"] .'</h2>';
          echo '<p>Brand: '  . $row["brand"] . '</p>';
          echo '<p>Model: '  . $row["model"] . '</p>';
          echo '<p>Type: ' . $row["type"] .'</p>';
          echo '<p>Price: $'. $row["price"] .'</p>';
          echo '<a href="purchase.html" class="cardbtn">Check Out</a>';
          echo '</div>';
        }
    }
    $conn->close();
    ?>
  </section>

  <footer class="footer">
    <p>Copyright &#169 2022 Legendary Motorsport. All rights reserved.</p>
  </footer>
</body>
</html>