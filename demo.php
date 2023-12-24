<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
</head>
<body>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Purchase</h5>
        <button onclick="window.location.href='cars_at_us.php'" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <!-- Form -->
        <form method="POST" action="purchase_be.php">
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