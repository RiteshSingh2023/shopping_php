<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div id="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-8">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(isset($_SESSION['cart']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            $sr=$key+1; 
            echo"
            <tr>
            <td>$sr</td>
            <td>$value[Item_Name]</td>
            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
            <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1'max='10'></td>
            <td class='itotal'></td>
            <td>
                <form action='manage_cart.php' method='POST'>
                  <button name='Remove_Item' class='btn btn-outline-danger'>Remove</button></td>
                  <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                </form>
            </tr>";
        }
    }
    ?>
    
    
  </tbody>
</table>
            </div>
            <div class="col-lg-4 border rounded bg-light" style="padding-left: 150px;">
                <h3>Grand Total</h3>
                <h5 id="gtotal"></h5>
                <form action="#">
                 <div class="form-check ">
                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                   <label class="form-check-label" for="flexRadioDefault2">
                     Cash on Delivery
                   </label>
                 </div> <br>                
                    <button class="btn btn-primary btn-block">Make Purchase</button>
                </form>
             </div>
        </div>
    </div>
<script>
  var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementsById('gtotal');

  function subTotal()
  {
    gt=0;
    for(i=0;i<iprice.length;i++)
    {
      itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
      gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
  }

  subTotal();
</script>
</body>
</html>