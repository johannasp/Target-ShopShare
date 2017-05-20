<!DOCTYPE html>
<html lang="en">
<head>
  <title>Target</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <link rel="icon" type="image/png" href="logo.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
echo "
    <nav class=\"navbar navbar-inverse\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"><img src=\"logo.png\" alt=\"Target logo\" class=\"navbar-logo\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
          <ul class=\"nav navbar-nav\" id=\"navbar\">
            <li><a href=\"#\">home</a></li>
            <li><a href=\"#\">products</a></li>
            <li><a href=\"#\">deals</a></li>
            <li><a href=\"#\">stores</a></li>
            <li><a href=\"#\">contact</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\" id=\"navbar-right\"><span class=\"glyphicon glyphicon-user\"></span> my account</a></li>
            <li><a href=\"#\" id=\"navbar-right\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Cart</a></li>
          </ul>
        </div>
      </div>

    <div class=\"container text-center\">
          <h1>
            <div class=\"title-target\">Cart</div>
          </h1>
    </div>

    </nav>
  ";
?>

 <div class="col-sm-9">
    <?php
      $json_data = file_get_contents("data.json");
      $json = json_decode($json_data);

      foreach ($json as $object) {
        $itemName = $object->name;
        $itemPrice = $object->price;
        $itemPic = $object->pic;
        echo "
            <div class=\"row\">
            <div class=\"panel panel-success\">
            <div class=\"panel-body\">
                <div class=\"col-sm-2\">  
                    <img src=\"$itemPic\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"> 
                </div>
                <div class=\"col-sm-5\">
                    <span class=\"item-name\">$itemName</span>
                </div>
                <div class=\"col-sm-2\">
                    <span class=\"price\">$itemPrice</span>
                </div>
            </div>
            </div>
            </div>
        ";
      }

    ?>

  </div>
    <div class="col-sm-3">
      <div class="container">
        <input type="submit" name="checkoutButton" class="checkout-button" value="I'm ready to check out">
        <h1>Order Summary</h1>
      </div>
    </div>


<br>
<br><br>
<footer class="container-fluid text-center">
  <p>Target ShopShare</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>