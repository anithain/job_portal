<? php
$server='localhost';
$username='root';
$password='';
$database='jobs';


$conn=mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}

echo"";

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_number'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `users`(`Name`,`email`, `password`, `phone_number`) VALUES ($name,$email,$password,$number)";
    if(mysqli_query($conn, $sql)){
        echo"Records inserted successfully.";
    }else{
      echo"ERROR: could not able to execute $sql." .mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(mysqli_fetch_row($result)==1){
        header("location:index.php");
    }
    else{
        $error:'emailid  or password is incorrect';
    }
}

if(isset($_POST['submit'])){
$cname=$_POST['cname'];
$position=$_POST['position'];
$jdesc=$_POST['jdesc'];
$skills=$_POST['skills'];
$CTC=$_POST['CTC'];

$sql="INSERT INTO `jobs`( `cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname', '$position', '$jdesc', '$skills', '$CTC')"
if(mysqli_query($conn, $sql)){
    echo"new JOb Posted";
}else{
  echo"ERROR: failed to post $sql." .mysqli_error($conn);
}
}
mysqli_close($conn);
?>