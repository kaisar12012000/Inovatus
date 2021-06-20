<?php

session_start();
$connect = mysqli_connect("localhost","root","","inovatus");

function dataItterator($connect){
    $select = "SELECT * FROM testimonials_data ORDER BY id DESC;";
	$select_result = mysqli_query($connect,$select) or die(mysqli_error($connect));
    $row = mysqli_fetch_array($select_result);
    do {
        echo "<tr>
                <th scope='row'>".$row["Name"]."</th>
                <td>".$row["Email"]."</td>
                <td>".$row["PhoneNo"]."</td>
                <td>".$row["Address"]."</td>
                <td>".$row["Job"]."</td>     
              </tr>";
    } while($row = mysqli_fetch_array($select_result));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Testimonial Form - Inovatus</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Test Form</li>
            </ul>
        </nav>
    </header>
    <div class="form">
        <form action="submit.php" method="post">
            <center><span class="form-head">Testimonials Form</span><br><br>
            <input placeholder="Full Name" type="text" name="name" id="name" required="required"><br><br>
            <input placeholder="Email" type="email" name="email" id="email" required="required"><br><br>
            <input placeholder="Phone number" type="phone" name="phone" id="phone" required="required"><br><br>
            <input placeholder="Address" type="text" name="address" id="address" required="required"><br><br><br>
            <label for="job">Job description</label><br>
            <select name="job" id="job" required="required">
                <option></option>
                <option>Web developer</option>
                <option>Android developer</option>
                <option>Social media marketer</option>
                <option>Content writer</option>
            </select><br><br><br>
            <input type="submit" class="submit" value="Submit"></center>
        </form>
    </div>
    <div class="testimonials">
        <center><h2>Testimonials</h2></center>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th> 
                    <th scope="col">Address</th>
                    <th scope="col">Job Description</th>
                  </tr>
                </thead>
                <tbody id="tableBody">
                  <?php dataItterator($connect) ?>
                  
                </tbody>
            </table>
    </div>
</body>
</html>