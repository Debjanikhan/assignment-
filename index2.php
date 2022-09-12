<html>
  <head>
    <title>
      Index2
    </title>
    <body>
    <?php
  $csvFilePath = "contact_data.csv";
  $file = fopen($csvFilePath, "r");
  while (($row = fgetcsv($file)) !== FALSE) 
  {
      $stmt = $mysqli->prepare("INSERT INTO tbl_users (name, email,phno) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $row[1], $row[2], $row[3]);
      $stmt->execute();

  }
 ?>


      <?php echo "log in sucessful!"; ?>
    </body>
  </head>
</html>