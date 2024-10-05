 <?php
$servername = "localhost";
$username = "root";
$password = "Nanuta@123!!!!!##";
$dbname = "ics_e";

try {
  // Specify the `mysql_native_password` plugin in the connection string
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;auth_plugin=mysql_native_password", $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 
