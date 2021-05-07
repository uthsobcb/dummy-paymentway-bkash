<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <?php include 'con.php'; ?>
    <title>Payment</title>
  </head>
  <body>
    <h1>bkash</h1>

<form action="" method="POST">
<div class="mb-3">
  <label for="FormControlInput1" class="form-label">Invoice no.</label>
  <input type="number" class="form-control" id="FormControlInput1" placeholder="your invoice number " name="invoice">
</div>
<div class="mb-3">
  <label for="FormControlInput1" class="form-label"> Full name.</label>
  <input type="text" class="form-control" id="FormControlInput1" name="name">
</div>
<div class="mb-3">
  <label for="FormControlTextarea1" class="form-label" >  Transaction Id</label>
  <textarea class="form-control" id="FormControlTextarea1" placeholder="Your trx id" rows="2" name="trx"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
        </form>

<?php 
 
 $method = $_SERVER['REQUEST_METHOD'];
 if($method == 'POST'){
   $invc = $_POST['invoice'];
   $nme = $_POST['name'];
   $trid = $_POST['trx'];
   
   $sql = "INSERT INTO `pah` (`invoice`, `name`, `trx`) VALUES ('$invc', '$nme', '$trid');";
   $result = mysqli_query($conn, $sql);
 }
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  </body>
</html>