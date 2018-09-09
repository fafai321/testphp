
<!DOCTYPE html>
<html lang="th">
</style>
</head>
<body>


 <section>

  
  <article>
<center>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
        
  <table class="table">
    <thead>
      <tr>
       <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>gender</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
        include("./conn/my.php");

        $sql = "SELECT	
        firstname,
        lastname,
        email,
        gender,
        birthday,
        nationality,
        address,
        size,
        age,
        id FROM test2";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo "<tr> <td>" . $row["id"] . "</td> <td>" . $row["firstname"] . "</td><td>" .  $row["lastname"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["email"] . "</td> </tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
                
      ?>
    
    </tbody>
  </table>
</div>
<?php

?>
</center> 
 </article>
</section>



    </body>
</html>