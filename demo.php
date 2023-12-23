<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Bootstrap Modal Example</title>
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
        <h4 class="modal-title">Modal Heading Level 1</h4>
        <h5 class="modal-title">Modal Heading Level 2</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <!-- Form -->
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
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
            <label for="brand">Brand:</label>
            <input type="text" class="form-control" id="brand" name="brand" disabled>
          </div>
          <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" class="form-control" id="model" name="model" disabled>
          </div>
          <div class="form-group">
            <label for="color">Color:</label>
            <select class="form-control color-select" id="color" name="color" onchange="changeColor(this.value)">
              <option value="" disabled selected>Select a color</option>
              <option value="red">Red</option>
              <option value="green">Green</option>
              <option value="blue">Blue</option>
              <!-- Add more color options as needed -->
            </select>
          </div>
        </form>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary" id="openModalButton">
  Open Modal
</button>

<script>
  document.getElementById('openModalButton').addEventListener('click', function() {
    // Extract parameters from the URL
    var urlParams = new URLSearchParams(window.location.search);
    
    // Get the values of brand and model from the URL
    var fetchedBrand = urlParams.get('brand');
    var fetchedModel = urlParams.get('model');

    // Set the fetched data to the modal fields
    document.getElementById('brand').value = fetchedBrand;
    document.getElementById('model').value = fetchedModel;

    // Open the modal
    $('#myModal').modal('show');
  });

  // JavaScript function to change the background color of the select tag
  function changeColor(selectedColor) {
    document.getElementById('color').style.backgroundColor = selectedColor;
  }
</script>



</body>
</html>