<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $dbc= mysqli_connect('localhost', 'root', '', 'carnazeForm') or die("Connection Failed:" .mysqli_connect_error());
        
        if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['address2']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zip'])){
            $firstName= $_POST['firstName'];
            $lastName= $_POST['lastName'];
            $userName= $_POST['userName'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $address= $_POST['address'];
            $address2= $_POST['address2'];
            $city= $_POST['city'];
            $state= $_POST['state'];
            $zip= $_POST['zip'];


            $sql= "INSERT INTO signInForm (FirstName,LastName,UserName,Email,AccountPassword,Address1,Address2,City,StateOfLeaving,ZIP) VALUES ('$firstName','$lastName','$userName','$email','$password','$address','$address2','$city','$state','$zip')";
            $query = mysqli_query($dbc, $sql);
            echo "hui Hui";
        }
        if($query) {
            echo "<script>alert('SIGN IN Successful')</script>";
        }
        else {
            echo 'Error Occurred';
        }
    }
?>