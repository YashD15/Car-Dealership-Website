<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Website Icon" href="Resources/LM.png">
  <title>Legendary MS - Receipt</title>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include html2canvas library from CDN -->
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

</head>
<body>

<!-- Modal -->
<div class="modal fade" id="pageModal" tabindex="-1" role="dialog" aria-labelledby="pageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="page-content">

        <!-- Receipt Generation code & Data Fetching from Database -->
        <?php
        $conn = new mysqli("localhost", "root", "", "legendary");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM purchase ORDER BY id DESC LIMIT 1";
        $result = $conn->query($query);
        if ($result) {
            $row = $result->fetch_assoc();
        ?>

        <!-- Figma generated Receipt -->
        <center>
        <div id="receipt" class='receipt' style='width: 500px; height: 400px; position: relative; background: #D5EEFF'>
          <div class='Rectangle1' style='width: 500px; height: 400px; left: 0px; top: 0px; position: absolute; background: #5FC9F3; border: 1px black solid'></div>
          <img class='LogoAbout1' style='width: 210px; height: 79px; left: 145px; top: 0px; position: absolute' src='Resources/Logo About.png'/>
          <div class='FullName' style='left: 37px; top: 85px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Full Name :</div>
          <div class='ContactNo' style='left: 271px; top: 85px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Contact No. :</div>
          <div class='EMail' style='left: 37px; top: 122px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>E-Mail :</div>
          <div class='OrderedOn' style='left: 271px; top: 122px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Ordered On :</div>
          <div class='OrderDetails' style='left: 198px; top: 158px; position: absolute; color: black; font-size: 16px; font-family: Inter; font-weight: 800; word-wrap: break-word'>Order Details</div>
          <div class='Rectangle2' style='width: 422px; height: 161px; left: 37px; top: 196px; position: absolute; background: #43BFC7; border-radius: 10px; border: 1px black solid'></div>
          <div class='Brand' style='left: 58px; top: 218px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Brand :</div>
          <div class='Model' style='left: 267px; top: 218px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Model :</div>
          <div class='Color' style='left: 58px; top: 255px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Color :</div>
          <div class='Price' style='left: 267px; top: 252px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Price :</div>
          <div class='Tax28' style='left: 267px; top: 286px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Tax (28%) :</div>
          <div class='Line1' style='width: 173px; height: 0px; left: 263px; top: 311px; position: absolute; border: 1px black solid'></div>
          <div class='Total' style='left: 296px; top: 320px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; word-wrap: break-word'>Total :</div>
          
          <!-- PHP Required Part Only -->
          <?php
            echo "<div class='Demo' style='left: 109px; top: 85px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['fname']." ".$row['lname']."</div>";
            echo "<div class='Demo' style='left: 344px; top: 320px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['total']."</div>";
            echo "<div class='Demo' style='left: 344px; top: 286px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['tax']."</div>";
            echo "<div class='Demo' style='left: 319px; top: 252px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['price']."</div>";
            echo "<div class='Demo' style='left: 319px; top: 218px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['carname']."</div>";
            echo "<div class='Demo' style='left: 109px; top: 255px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['color']."</div>";
            echo "<div class='Demo' style='left: 109px; top: 218px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['brand']."</div>";
            echo "<div class='Demo' style='left: 355px; top: 122px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['ordered_on']."</div>";
            echo "<div class='Demo' style='left: 91px; top: 122px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['email']."</div>";
            echo "<div class='contact' style='left: 355px; top: 85px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word'>".$row['contact']."</div>";
          ?>
          <img class='Lm1' style='width: 50px; height: 49px; left: 442px; top: 9px; position: absolute' src='Resources/LM.png' />
        </div>
        <!-- Download Receipt Button -->
        <div style="padding: 20px; margin:10px;">
            <button onclick="downloadImage()">Download Image</button>
        </div>
        </center>

        <?php
        $result->close();
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        // Close connection
        $conn->close();
        ?>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
// Function to open the modal on page load
function openModalOnLoad() {
  $('#pageModal').modal('show');
}

// Attach the function to the onload event of the body
document.body.onload = openModalOnLoad;

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

    //Automatically redirect to main page after download completes in 2sec
    setTimeout(function() {
        window.location.href = "cars_at_us.php";
    }, 2000);
  });
}
</script>

</body>
</html>