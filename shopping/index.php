<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <center>
    <div class="container mt-5">
        <div id="row">
            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card" >
                    <img src="image/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                      <h5 class="card-title">Gucci</h5>
                      <p class="card-text">Price: Rs.450</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                      <input type="hidden" name="Item_Name" value="Gucci">
                      <input type="hidden" name="Price" value="450">
                    </center>
                    </div>
                  </div>
                </form>
            </div>

            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card" >
                    <img src="image/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Louis</h5>
                      <p class="card-text">Price: Rs.650</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                      <input type="hidden" name="Item_Name" value="Louis">
                      <input type="hidden" name="Price" value="650">
                    </div>
                  </div>
                </form>
            </div>

            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card" >
                    <img src="image/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Chanel</h5>
                      <p class="card-text">Price: Rs.750</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                      <input type="hidden" name="Item_Name" value="Chanel">
                      <input type="hidden" name="Price" value="750">
                    </div>
                  </div>
                </form>
            </div>

            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card" >
                    <img src="image/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Qwer</h5>
                      <p class="card-text">Price: Rs.1000</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
                      <input type="hidden" name="Item_Name" value="Qwer">
                      <input type="hidden" name="Price" value="1000">
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
    </center>
</body>
</html>