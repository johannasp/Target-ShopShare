<!DOCTYPE html>
<html lang="en">
<head>
  <title>Target</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<?php include 'nav.php'?>


<div class="container">
  <div class="row">

    <?php
      $json_data = file_get_contents("data.json");
      $json = json_decode($json_data);
      //echo var_dump($json);

      foreach ($json as $object) {
        $itemName = $object->name;
        $itemPrice = $object->price;
        $itemPic = $object->pic;
        echo "
        <div class=\"col-sm-4\">
          <div class=\"panel panel-success\">
            <div class=\"panel-body\"><img src=\"$itemPic\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
            <div class=\"panel-footer\">
              <input type=\"submit\" class=\"add-button\" value=\"add to cart\">
              <div class=\"panel-footer-price\">$itemPrice</div>
              <div class=\"panel-footer-name\">$itemName</div>
            </div>
          </div>
        </div>
        ";
      }
    ?>

  </div>
</div><br>

<br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
