<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <?php require_once 'process.php'; ?>
  <div class="row justify-content-center">
    <form action="process.php" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="Enter your name">
      </div>
      <div class="form-group">
        <label>location</label>
        <input type="text" name="location" class="form-control" value="Enter your location">
      </div>
      <div class="form-group">
        <button tyep="submit" class="btn btn-primary" name="save">Save</button>
      </div>
    </form>
  </div>
</body>


</html>