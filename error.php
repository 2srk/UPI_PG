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

    <title>Payment Failed</title>
    <?php
   if (!empty($_GET)) 
   {
       if (empty($_GET)) {
           $id = 'Transaction not initialized correctly';
       }
       else {
           $id = 'Trx ID: '.$_GET['id'];
       }
   } 
   else { 
    $id = 'Transaction not initialized correctly';
   } 
   
  ?>


  </head>

  <body>
    <div class="qr-code-payment">
      <div class="image-qr-code">
        <img
          style="border-radius: 20px"
          src="images/error.png"
          alt="image-qr-code"
          width="300px"
          height="300px"
        />
      </div>

      <div class="header">
        <h1>
         Transaction Failed
        </h1>
      </div>

      <div class="paragraph">
        <p>
          The Transaction has failed.<br />
          If any balance has been<br />
          Deducted, Please contact us<br />
          immediately at "pghelp@plak.co.in"
        </p>
      </div>
    </div>

    <div class="footer">
      <h3><?php echo $id; ?></h3>
    </div>
  </body>
</html>
