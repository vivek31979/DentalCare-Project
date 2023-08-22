<?php
    include("connect.php"); 
            $pname = $_POST["pname"];
            $bp = $_POST['bp'];
            $mobile = $_POST['mobile'];
            $aadhar = $_POST['aadhar'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $temperature = $_POST['temperature'];
            $vdate = $_POST['vdate'];
        
        $insert_statement = ("INSERT INTO patient (pname, bp, mobile, aadhar, age, gender, temperature, vdate) VALUES ('$pname', '$bp', '$mobile', '$aadhar', '$age', '$gender', '$temperature', '$vdate')");
        $insert = mysqli_query($connect, $insert_statement);
    
        if($insert)
        {
            echo '
            <script>
                    alert("Data stored successfully:)");
                    window.location = "adminpage.html";
            </script>
        ';
        }
        else
        {
            echo '
            <script>
                    alert("Some error occcur!");
                    window.location = "adminpage.html";
            </script>
        ';
        }

    
  
?>

