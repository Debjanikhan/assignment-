<html>
  <head>
    <title>
      Index1
    </title>
    <body>
      <?php
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phoneno = $_POST['phno'];
      $data = [$name, $email ,$phoneno];

      $f = fopen('contact_data.csv', "a");
      fputcsv($f, $data);
      fclose($f);
      ?>
      <?php echo "Thank you for your submission!"; ?>
    </body>
  </head>
</html>