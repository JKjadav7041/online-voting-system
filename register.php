<?php
    include("connect.php");
    $name = $_POST['name'];
    $voter_id = $_POST['voter_id'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $imge = $_FILES['photo']['name'];
    $tem_name = $_FILES['photo']['tmp_name'];  // Corrected typo here
    $role  = $_POST['role'];

    if($password == $cpassword)
    {
        // Move the uploaded file
        move_uploaded_file($tem_name, "./images/$imge");
        
        // Insert user data into the database
        $insert = mysqli_query($connect , "INSERT INTO user (name, voter_id, password, address, photo, role, status, votes) VALUES ('$name', '$voter_id', '$password', '$address', '$imge', '$role', 0, 0)");

        if($insert)
        {
            echo '
            <script>
            alert("Registration Successful.");
            window.location = "../MICRO_PROJECT/index.php";
            </script>';
        }
        else
        {
            echo '
            <script>
            alert("Something went wrong, please check your information.");
            window.location = "../MICRO_PROJECT/registration.php";
            </script>';
        }
    }
    else
    {
        echo '
        <script>
        alert("Password and confirm password do not match!");
        window.location = "../MICRO_PROJECT/registration.php";
        </script>';
    }
?>
