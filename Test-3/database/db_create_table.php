<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "c3_commentdb";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS comments (
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(30) NOT NULL,
	comment TEXT(2000) NOT NULL,
	date DATE,
  primary key (id)
);";
if ($conn->query($sql) === TRUE) {
  $sql = "INSERT IGNORE INTO comments (id, username, comment, date)
    VALUES ('', 'Adam Adams','Nice website! Im here every single day!','2020-07-11')";
    if ($conn->query($sql) === TRUE) {

    } else {
      echo "Error creating database: " . $conn->error;
    }

    $sql = "INSERT IGNORE INTO comments (id, username, comment, date)
      VALUES ('', 'Khabib Nurmagomedov','Ey! You misspelled my name in the rankings.','2020-04-25')";
      if ($conn->query($sql) === TRUE) {

      } else {
        echo "Error creating database: " . $conn->error;
      }
} else {
  echo "Error creating database: " . $conn->error;
}


$conn->close();
?>
