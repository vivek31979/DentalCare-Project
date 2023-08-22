<?php
session_start();
include("connect.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_statments = ("SELECT * FROM admin WHERE email='$email' AND password='$password'");

    $check = mysqli_query($connect, $select_statments);

    if(mysqli_num_rows($check)>0)
    {
        $userdata = mysqli_fetch_array($check);
        $_SESSION['userdata'] = $userdata;

        echo '
            <script>
            alert("Login successfully:)");
                window.location = "adminpage.html";
                </script>
        ';
    }
    else 
    {
        echo '
                <script>
                    alert("Invalid Credentials or User not found!");
                    window.location = "admin.html";
                </script>
            ';
    }
?>