Login system :
<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$email = $_POST['email'];
$password = $_POST['password'];
if(!empty($user_name) && !empty($email) && !empty($password))
{

$query = "select * from users where email = '$email' limit1");
$result = mysqli_query($con, $query);
if($result)
{
if($result && mysqli_num_rows($result) >0)
{
$user_data = mysqli_fetch_assoc($result);
if($user_data['password'] === $password)
{
$_SESSION['email'] = $user_data['email'];
header("Location: index.php");
 die;
}
}
}
}else
{
echo "informations is wrong";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Login </title>
</head>
<body>
<style type="text/css">
#text{
height: 25px;
border-radius: 5px;
padding: 4px
border: solid thin #aaa;
width: 100%;
}
#button{
padding 10px;
width: 100px;
color: white;
background-color: Lightblue;
border: none;
}
#box{
background-color: bule;
margin: auto;
width: 300px;
paddding: 20px;
}
</style>
<div id= "box">
<form method= "post">

<div style="font-size: 20px;margin: 10px;">Login</div>
 <input type="email" name="email" placeholder="Email:"><br>



 <input type="password" name="password" placeholder="Password:"><br>



 <input id="button" type="submit" value="Login" name="submit">
 <a href="register.php">Ckick to Register</a>



 </form>
 </div>
Dashboard:
<?php
session_start();
include("connection.php")
include("functions.php")
$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
<title> Social media page </title>
</head>
<body>
<a href="userpage.php"></a>
<a href="logout.php">Logout</a>
<?php echo $user_data['user_name']
?>
</body>
</html>
<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$image = $_POST['image'];
$text = $_POST['text'];
$date = $_POST['date'];
if(!empty($Post) && !empty($image) && !empty($text) && !empty($date))
{

$query = "select * from users where images = '$images' limit1");
$result = mysqli_query($con, $query);
if($result)
{
if($result && mysqli_num_rows($result) >0)
{
$Post = mysqli_fetch_assoc($result)
<?
<!DOCTYPE html>
<html>
<head>
<title> Post </title>
</head>
<body>
<h1> RICHFIELD </h1>
<style type="text/css">
#text{
height: 30px;
border-radius: 20px;
padding: 25px
border: solid thin #aaa;
width: 200%;
}
#button{
padding 10px;
width: 100px;
color: black;
background-color: light bule;
border: none;
}
#box{
background-color: bule;
margin: auto;
width: 300px;
paddding: 20px;
}
</style>
<div id= "box">
<form method= "post">

<div style="font-size: 20px;margin: 10px;">Post</div>
 <input type="Share something" name="share something" placeholder="Share
something:"><br>







 <input id="button" type="submit" value="Post" name="submit">
 <a href="index.php"> Upload New Profile Picutre</a>




 </form>
 </div>


</body>
</html>


</body>
</html>
<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$id = $POST['id'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
if(!empty($user_name) && !empty($email) && !empty($password) &&
!is_numeric($user_name)
{

$query = "insert into users (user_name,email,password) values
('$id','$user_name','$email','$password')";
mysqli_query($con, $query);
header("Location: Social_Media_Login.php");
die;
}else
{
echo "informations is wrong";
}
}
?>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbemail = "localhost";
$dbpass = "";
$dbuser_name = "social_network";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbemail,$dbpass,$dbname))
{
die("failed to connect!");
}
?>
<?php
function check_login($con)
{
if(isset($_SESSION['user_id']))
{
$id = $_SESSION['user_id'))
{
$id = $_SESSION['user_id'];
$query = "select * from user Where user_id = '$id' limit 1";
$result = myspli_query($con,$query);
if($result && mysqli_num_rows($result) >0)
{
$user_data = mysqli_fetch_assoc($result);
return $user_data;
}
}
header("Loaction: Social_Media_Login.php");
die;
}
function random_num($length)
{
$text = "";
if($length < 5)
{
$length = 5;
}
$len = rand(4,$length);
for ($i=0; $i <$len; $i++) {
$text .= rand(0,9);
}






 <input id="button" type="submit" value="Search" name="submit">
 <a href="index.php"> View Profile</a>




 </form>
 </div>


</body>
</html>
<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$messages = $_POST['messagess'];
if(!empty($Post) && !empty($image) && !empty($text) && !empty($date))
{

$query = "select * from users where images = '$images' limit1");
$result = mysqli_query($con, $query);
if($result)
{
if($result && mysqli_num_rows($result) >0)
{
$Post = mysqli_fetch_assoc($result)
<?
<!DOCTYPE html>
<html>
<head>
<title> Post </title>
</head>
<body>
<h1> RICHFIELD </h1>
<style type="text/css">
#text{
height: 30px;
border-radius: 20px;
padding: 25px
border: solid thin #aaa;
width: 200%;
}
#button{
padding 10px;
width: 100px;
color: black;
background-color: light bule;
border: none;
}
#box{
background-color: bule;
margin: auto;
width: 300px;
paddding: 20px;
}
</style>
<div id= "box">
<form method= "post">

<div style="font-size: 20px;margin: 10px;">Post</div>
 <input type="Sarch by name" name="Sarch by name" placeholder="Sarch by
name:"><br>







 <input id="button" type="submit" value="Search" name="submit">
 <a href="index.php"> View Profile</a>




 </form>
 </div>


</body>
</html>
<?php
session_start();
if(isset($_SESSION['user_id']))
{
unset($_SESSION['User_id']);
}
header("Location: Social_Media_Login.php");
<?