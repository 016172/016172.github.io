<?php

$link = mysqli_connect("den1.mysql4.gear.host", "scheduleplusdb", "Yq2Am5!ulT~O", "scheduleplusdb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO users (username, password) VALUES ('AndreasTEST', 'OPS')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>