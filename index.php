<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />

    <title>Secure Payment Gateway | UPI</title>


	<script>
<?php
$id = $_POST['id'];
$time = $_POST['time'];
$name = $_POST['mname'];
$price = $_POST['price'];
$vpa = $_POST['vpa'];
$EndHook = $_POST['EndHook'];
//April 20, 2024 15:37:25
?>
var countDownDate = new Date("<?php echo $time; ?>").getTime();

var x = setInterval(function() {


  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
 
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  document.getElementById("time").innerHTML = minutes + "m " + seconds + "s ";
    
  
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "EXPIRED";
window.location.href = "error.php?id=<?php echo $id; ?>";
  }
}, 1000);
</script>

  </head>

  <body>
    <div class="qr-code-payment">
      <div class="image-qr-code">
          <!--
           <img
          style="border-radius: 20px"
          src="https://api.dub.co/qr?url=upi://pay?cu=INR&pa=<?php echo $vpa; ?>&pn=<?php echo $name; ?>&am=<?php echo $price; ?>"
          alt="Generating Tokens..."
          width="300px"
          height="300px"
        />
          -->
        <img
          style="border-radius: 20px"
          src="https://upiqr.in/api/qr/?name=<?php echo $name; ?>&vpa=<?php echo $vpa; ?><?php echo $name; ?>"
          alt="Generating Tokens..."
          width="300px"
          height="300px"
        />
      </div>

      <div class="header">
        <h1>
          Scan BHIM UPI QR code<br />
        
        </h1>
      </div>

      <div class="paragraph">
        <p>
          Merchant: <?php echo $name; ?><br>
          Price: <?php echo $price; ?><br>
          TRX NO: <?php echo $id; ?>
        </p>
          <form action="success.php" method="post">
              <p>
              <label>
                  Transaction Number
              </label>
              <input name="trx" type="text" id="trx">
                  <input type="submit" value="Next">
                  <input type="hidden" name="time" value="<?php echo $time; ?>">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <input type="hidden" name="price" value="<?php echo $price; ?>">
                  <input type="hidden" name="vpa" value="<?php echo $vpa; ?>">
                  <input type="hidden" name="EndHook" value="<?php echo $EndHook; ?>">
          </p>
          </form>
      </div>
      </div>

    <div class="footer">
      <p>Time Left<h3 id="time"></h3></p>
    </div>
  </body>
</html>
