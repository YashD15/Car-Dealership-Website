<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Include html2canvas library from CDN -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <title>Legendary MS - Purchase</title>
  <style>
    .color-select {
      width: 100%;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
  </style>
  <style>
        #optionsDivision {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
        }
    </style>
</head>
<body>

<div id="optionsDivision">
    <button onclick="cancelOrder()">Cancel Order</button>
    <button onclick="downloadImage()">Download Image</button>
</div>

<script>
    function cancelOrder() {
        // Add your cancel order logic here
        alert("Order cancelled!");
    }

    function downloadImage() {
        // Get the content of the division
        const optionsDivision = document.getElementById('receipt');

        // Create a canvas element to convert the division content to an image
        html2canvas(optionsDivision).then(function(canvas) {
            // Convert canvas to data URL
            const imgData = canvas.toDataURL('image/png');

            // Create a temporary link element
            const link = document.createElement('a');
            link.href = imgData;
            link.download = 'division_image.png';

            // Append the link to the body and trigger the download
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    }
</script>

</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "legendary");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch the last record by ID
$query = "SELECT * FROM purchase ORDER BY id DESC LIMIT 1";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

echo "<center>";
echo "<div class='Frame1' style='width: 500px; height: 400px; position: relative; background: #D5EEFF'>";
echo "<div class='Rectangle1' style='width: 500px; height: 400px; left: 0px; top: 0px; position: absolute; background: #5FC9F3; border: 1px black solid'></div>";
echo "<img class='LogoAbout1' style='width: 210px; height: 79px; left: 145px; top: 0px; position: absolute' src='Resources/Logo About.png'/>";
echo "<div class='FullName' style='left: 37px; top: 85px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Full Name :</div>";
echo "<div class='ContactNo' style='left: 271px; top: 85px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Contact No. :</div>";
echo "<div class='EMail' style='left: 37px; top: 122px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>E-Mail :</div>";
echo "<div class='OrderedOn' style='left: 271px; top: 122px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Ordered On :</div>";
echo "<div class='OrderDetails' style='left: 198px; top: 158px; position: absolute; color: black; font-size: 16px; font-family: Inter; font-weight: 800; word-wrap: break-word'>Order Details</div>";
echo "<div class='Rectangle2' style='width: 422px; height: 161px; left: 37px; top: 196px; position: absolute; background: #43BFC7; border-radius: 10px; border: 1px black solid'></div>";
echo "<div class='Brand' style='left: 58px; top: 218px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Brand :</div>";
echo "<div class='Model' style='left: 267px; top: 218px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Model :</div>";
echo "<div class='Color' style='left: 58px; top: 255px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Color :</div>";
echo "<div class='Price' style='left: 267px; top: 252px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Price :</div>";
echo "<div class='Tax28' style='left: 267px; top: 286px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Tax (28%) :</div>";
echo "<div class='Line1' style='width: 173px; height: 0px; left: 263px; top: 311px; position: absolute; border: 1px black solid'></div>";
echo "<div class='Total' style='left: 296px; top: 320px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Total :</div>";
  echo "<div class='Demo' style='left: 109px; top: 85px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='Demo' style='left: 344px; top: 320px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='Demo' style='left: 344px; top: 286px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='Demo' style='left: 319px; top: 252px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='Demo' style='left: 319px; top: 218px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='Demo' style='left: 109px; top: 255px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='Demo' style='left: 109px; top: 218px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='Demo' style='left: 355px; top: 122px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='Demo' style='left: 91px; top: 122px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>DEMO</div>";
  echo "<div class='contact' style='left: 355px; top: 85px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['contact']."</div>";
echo "<img class='Lm1' style='width: 50px; height: 49px; left: 442px; top: 9px; position: absolute' src='Resources/LM.png' />";
echo "</div>";
echo "</center>";

$result->close();
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
// Close connection
$conn->close();
?>





<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Purchase</h5>
        <button onclick="window.location.href='demo.php'" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <!-- Form -->
        <form method="POST" action="cars_at_us.php">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="FirstName">
            <input type="text" class="form-control" id="lname" name="lname" placeholder="LastName">
          </div>
          <div class="form-group">
            <label for="contact">Contact No.:</label>
            <input type="text" class="form-control" id="contact" name="contact">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="car">Brand:</label>
            <input type="text" class="form-control" id="brand" name="brand" readonly>
            <input type="hidden" class="form-control" id="category" name="category" readonly>
            <input type="hidden" class="form-control" id="price" name="price" readonly>
          </div>
          <div class="form-group">
            <label for="model">Name:</label>
            <input type="text" class="form-control" id="carname" name="carname" readonly>
          </div>
          <div class="form-group">
            <label for="color">Color:</label>
            <select class="form-control color-select" id="color" name="color" onchange="changeColor(this.value)">
              <option value="" disabled selected>Select a color</option>
              <option value="DodgerBlue">Blue</option>
              <option value="Gold">Yellow</option>
              <option value="DarkOrange">Orange</option>
              <option value="LawnGreen">Green</option>
            </select>
          </div>
          <!-- Modal Footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // Extract parameters from the URL
  var urlParams = new URLSearchParams(window.location.search);
  // Set the fetched data to the modal fields
  console.log(document.getElementById('brand').value = urlParams.get('brand'));
  console.log(document.getElementById('carname').value = urlParams.get('carname'));
  console.log(document.getElementById('category').value = urlParams.get('category'));
  console.log(document.getElementById('price').value = urlParams.get('price'));

  // Open the modal
  $('#myModal').modal('show');

  // JavaScript function to change the background color of the select tag
  function changeColor(selectedColor) {
    document.getElementById('color').style.backgroundColor = selectedColor;
  }
  
</script>
</body>
</html>