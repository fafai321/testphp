<?php
include("conn/my.php");

// define variables and set to empty values
$name = $email = $gender = $comment = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  //$name = trim($_POST["name"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $birthday = test_input($_POST["birthday"]);
  $nationality = test_input($_POST["nationality"]);
  $address = test_input($_POST["address"]);
  $size = test_input($_POST["size"]);
  $age = test_input($_POST["age"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname."<br>".$lastname."<br>".$email."<br>".$gender."<br>".$birthday."<br>".$nationality."<br>".$address."<br>".$size."<br>".$age."<br>";

//insert data
$sql = "INSERT INTO test2 (firstname,lastname, email,gender,birthday,nationality,address,size, age) 
VALUES('$firstname','$lastname', '$email','$gender','$birthday','$nationality','$address','$size', '$age') ";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>