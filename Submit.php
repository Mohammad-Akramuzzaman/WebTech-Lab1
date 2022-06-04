<?php
if($_SERVER ['REQUEST_METHOD']=='POST') {
    if (empty($_POST['f_name'])){
        echo "First name is required";
        echo "<br>";
    }
    if (empty($_POST['lname'])){
        echo "Last name is required";
        echo "<br>";
    }
    if (empty($_POST['gender'])){
        echo "Gender is required";
        echo "<br>";
    }
    if (empty($_POST['email'])){
        echo "Email is required";
        echo "<br>";
    }
    if (empty($_POST['mobile_no'])){
        echo "Mobile no is required";
        echo "<br>";
    }
    if (empty($_POST['street/house/road'])){
        echo "Address is required";
    }
}
else
{
   echo "Form submitted successfully";
}


?>