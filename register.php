<?php
include('database.php');
?>
<?php
if(isset($_POST['register'])){
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
$users = mysqli_query($conn, "select * from login where username='$name' and email='$email'");
$availble = mysqli_num_rows($users);
$message ="User exists";
if($availble>0){
    header("location:dashlane.php?message='username already exists'");
}else{
    $sql = mysqli_query($conn, "insert into login(username,email,password,usertype) VALUES('$name','$email','$password','$usertype');");
 header("location:config.php");
}
// the login section
}

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $userpassword = mysqli_real_escape_string($conn, $_POST['userpassword']);
    $sql1 = mysqli_query($conn, "select *from login where username='$username' and password='$userpassword'");
    $row = mysqli_num_rows($sql1);
   if($row>0){
 // echo matching user types to there corresponding pages;
    $USER = mysqli_fetch_assoc($sql1);
    if($USER['usertype']==="admin"){
        $_SESSION['USER_ID'] =$USER['id'];
        $_SESSION['USER_NAME']=$USER['username'];
        header("location:index.php?msgsuccess=Login successful"); 
    }else{
        $_SESSION['USER_ID'] =$USER['id'];
        $_SESSION['USER_NAME']=$USER['username'];
        header("location:attendant.php?msgsuccess=Login successful"); 
    }

} else{
    header("Location: config.php?message=Invalid details, Try again!!!");
    exit();
   }
}


// Registering products section
if(isset($_POST['Register'])){
    $productname = mysqli_real_escape_string($conn, $_POST['productname']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $regdate =mysqli_real_escape_string($conn, $_POST['regdate']);
    $sql1=mysqli_query($conn, "select * from products where productname='$productname'");
    $row=mysqli_num_rows($sql1);
    if($row>0){
        header("location:index.php?failed=Product  name '$productname' already exits.");
    }else{
        $sql = mysqli_query($conn, "insert into products (productname, price, quantity, regdate) values('$productname','$price','$quantity','$regdate');");
        header("location: productlist.php?success=Product added successfully.");
    }
}
//updating the products details
if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $productname = mysqli_real_escape_string($conn, $_POST['productname']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $regdate =mysqli_real_escape_string($conn, $_POST['regdate']);
    mysqli_query($conn, "update products set productname='$productname', price='$price', quantity='$quantity', regdate='$regdate' where id='$id'");
    header("location:productlist.php");
}

?>