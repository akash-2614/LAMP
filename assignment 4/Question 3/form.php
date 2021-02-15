<?php
include('connect.php');
?>


<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    
    $sql = "INSERT INTO `the 'users'` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    mysqli_query($conn, $sql);    
}
else
{
    echo "<h3 style='text-align: center;'>Please Fill The Form and Submit By Clicking Submit Button.</h3>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTML Form</title>
        <style>
            div{
                width:400px;
                height:300px;
                padding:10px;
                margin-left:38%;
                margin-right:30%;
                border:5px solid black;
                float:center;
            }
        </style>
    </head>
    <body>
        <div>
        <form method="POST" action="form.php">
            Username &nbsp; &nbsp; <input type="text" name="username" placeholder="Enter Your Username" required><br><br>
            E-Mail &nbsp; &nbsp; &nbsp; &nbsp; <input type="email" name="email" placeholder="Enter Your E-Mail" required><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M" checked>
            Female <input type="radio" name="gender" value="F">
            Other <input type="radio" name="gender" value="O"><br><br>
            City - <select name="city">
                <option value="Dehradun" selected>DEHRADUN</option>
                <option value="Delhi">DELHI</option>
                <option value="Nanital">NAINITAL</option>
                <option value="Mussoorie">MUSSOORIE</option>
            </select>
            <br><br>
            <input type="submit" name="submit">
        </form>
        </div>
    </body>
</html>









<?php

?>