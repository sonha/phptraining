<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codeto_news";
// phpinfo();
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT * FROM category";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
<ul>
  <?php 
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<li><a href='#about'>".$row['category_name']."</a></li>";
	    }
	} 
	$conn->close();
  ?>


</ul>

</body>
</html>

