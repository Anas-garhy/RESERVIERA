 <?php
$url='localhst';
$username = "root";
$password = "";
$dbname = "resrviera";
$checkbox1 = $_POST['chairNum'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  

$conn = mysqli_connect($url, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO checkbox(chairNum)VALUES( '$chk' )";

if(mysqli_query($conn,$sql)) {

    echo 'Data added sucessfully';
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>