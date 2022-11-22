<?php

require_once "./db_connect.php";

// Query
$sql = "SELECT * FROM car WHERE car_id = $id";
// Run Query
$result = mysqli_query($connect, $sql);
//Fetch data
$row = mysqli_fetch_assoc($result);

//Store values into variables
$name = @$row['name'] ?: null;
$price = @$row['price'] ?: null;
$picture = @$row['picture'] ?: null;

//Close connection
mysqli_close($connect);
