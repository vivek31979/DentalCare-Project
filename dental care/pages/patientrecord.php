<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient records</title>
    <style>
        body{
            
            background: url("data:image/jpeg;base64,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") no-repeat;
            background-size:cover;
        }
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Patient Records</h1>
    <hr>
    <table border="2" cellspacing="7">
    <tr>
        <th>ID</th>
        <th>Patient Name</th>
        <th>Blood Pressure</th>
        <th>mobile</th>
        <th>Aadhar no.</th>
        <th>Age</th>
        <th>gender</th>
        <th>Temperature</th>
        <th>Visited Date</th>
    </tr>

<?php
include("connect.php");
error_reporting(0);
$query = "select * from patient";
$data = mysqli_query($connect,$query);

$total = mysqli_num_rows($data);


echo $result['id'] ." ".$result['pname'] ." ".$result['bp'] ." ".$result['mobile'] ." ".$result['aadhar'] ." ".$result['age'] ." ".$result['gender'] ." ".$result['temperature'] ." ".$result['vdate'];

if($total!=0)
{
    while(($result = mysqli_fetch_assoc($data)))
    {
        echo "
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['pname']."</td>
        <td>".$result['bp']."</td>
        <td>".$result['mobile']."</td>
        <td>".$result['aadhar']."</td>
        <td>".$result['age']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['temperature']."</td>
        <td>".$result['vdate']."</td>
        ";
    }
}
else
{
   // echo "no records found";
}
?>

</table>
</body>
</html>