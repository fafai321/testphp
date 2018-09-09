
<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: yellow;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: black;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: grey;
    height: 450px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: orange;
    padding: 10px;
    text-align: center;
    color: black;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

 <section>
  <nav>
    <ul>
      <li><a href="register.php">สมัคร Run</a></li>
      <li><a href="report.php">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
  <article>
<center>
<form action="result.php" method="POST">

First name:
<input type="text" name="firstname">

Last name:
<input type="text" name="lastname">
<br>
<br>
Email:
<input type="text" name="email">
password:
<input type="text" name="password">
<br><br>
gender:

  <input type="radio" name="gender" value="male" checked> Male&#160;
  <input type="radio" name="gender" value="female"> Female<br>
<br>
birthday:
<input type="text" name="birthday">
nationality:
<input type="text" name="nationality">
<br>
<br>
<div style="
    margin: 0 0 0 -27em;
">
address : 
</div>
<div>
  <textarea name="address" rows="10" cols="30" style="margin: -16px;height: 100px;width: 339px;">type your address here.</textarea>
  <br>
</div>
<br><br>
<div style="
    margin: 0 0 0 -26em;
">type of shirt</div>
size:
<input type="text" name="size">
<br>
<br>
age:
<input type="text" name="age">
<br><br>
<input type="submit">
</form>
</center> 
 </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>