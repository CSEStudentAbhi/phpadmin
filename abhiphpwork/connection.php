<?php
$servername="localhost";
$username="root";
$password= "";
$dbname= "abhi";
$tbname= "friend";

$conn=mysqli_connect($servername, $username, $password, $dbname);   
if(!$conn){
    die("Failed". mysqli_connect_error());
}
echo "Connected Sucefully";

// $sql = "INSERT INTO $tbname VALUES
//     ('','Radha', 'T', 'siddu@gamil.com')";


// if($conn->query($sql) === TRUE) {
//     $result= "record inserted successfully";

// } else {
//     $result= "Error: " . $sql . "<br>" . $conn->error;
// }

$sql = "SELECT * FROM $tbname";
$reslt1= $conn->query($sql);

$student=array();
while($row = $reslt1->fetch_assoc()) {
    $student[]= $row;
    echo $row['id'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <div>
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                </tr>
                <tr>
                   <td><?php 
                        $sql = 'SELECT * FROM friend';
                        $reslt2= $conn->query($sql);
                        while($row = $reslt2->fetch_assoc()) {
                            echo $row['id']. "<br>";
                            
                        }
                   ?></td>
                   <td><?php 
                        $sql = 'SELECT * FROM friend';
                        $reslt2= $conn->query($sql);
                        while($row = $reslt2->fetch_assoc()) {
                            echo $row['fname']. "<br>";
                            
                        }
                   ?></td>
                   <td><?php 
                        $sql = 'SELECT * FROM friend';
                        $reslt2= $conn->query($sql);
                        while($row = $reslt2->fetch_assoc()) {
                            echo $row['lname']. "<br>";
                            
                        }
                   ?></td>
                   <td><?php 
                        $sql = 'SELECT * FROM friend';
                        $reslt2= $conn->query($sql);
                        while($row = $reslt2->fetch_assoc()) {
                            echo $row['email']. "<br>";
                            
                        }
                   ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>