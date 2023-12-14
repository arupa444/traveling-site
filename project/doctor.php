<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $dbc= mysqli_connect('localhost', 'root', '', 'doctorsAppointment') or die("Connection Failed:" .mysqli_connect_error());
        
        if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['phNumber']) && isset($_POST['email']) && isset($_POST['pinCode']) && isset($_POST['location']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['typeAddq'])){
            $firstName= $_POST['firstName'];
            $lastName= $_POST['lastName'];
            $phNumber= $_POST['phNumber'];
            $email= $_POST['email'];
            $pinCode= $_POST['pinCode'];
            $location= $_POST['location'];
            $city= $_POST['city'];
            $state= $_POST['state'];
            $typeAddq= $_POST['typeAddq'];


            $sql= "INSERT INTO doctorAppointments (FirstName,LastName,PhoneNumber,Email,PINCode,Location1,City,State1,AddressType) VALUES ('$firstName','$lastName','$phNumber','$email','$pinCode','$location','$city','$state','$typeAddq')";
            $query = mysqli_query($dbc, $sql);
        }
        if($query) {
            echo "<script>alert('Appointment Booked')</script>";
        }
        else {
            echo 'Error Occurred';
        }
    }
?>