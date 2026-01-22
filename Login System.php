<?php
// Start session and include required files
session_start();
include("connection.php");
include("functions.php");

// ================== LOGIN ==================
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)) {
        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            } else {
                echo "Password is incorrect";
            }
        } else {
            echo "Email not found";
        }
    } else {
        echo "Please enter both email and password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
#text {
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
}
#button {
    padding: 10px;
    width: 100px;
    color: white;
    background-color: Lightblue;
    border: none;
}
#box {
    background-color: blue;
    margin: auto;
    width: 300px;
    padding: 20px;
}
</style>
</head>
<body>
<div id="box">
    <form method="post">
        <div style="font-size: 20px;margin: 10px;">Login</div>
        <input type="email" name="email" placeholder="Email:" required><br><br>
        <input type="password" name="password" placeholder="Password:" required><br><br>
        <input id="button" type="submit" value="Login">
        <a href="register.php">Click to Register</a>
    </form>
</div>
</body>
</html>

<?php
// ================== REGISTRATION ==================
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name)) {
        $query = "INSERT INTO users (user_name, email, password) VALUES ('$user_name','$email','$password')";
        mysqli_query($con, $query);
        header("Location: Social_Media_Login.php");
        die;
    } else {
        echo "Information is wrong";
    }
}

// ================== POSTING ==================
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['text'])) {
    $image = $_POST['image'] ?? '';
    $text = $_POST['text'];
    $date = $_POST['date'] ?? date('Y-m-d');

    if(!empty($text)) {
        $query = "INSERT INTO posts (user_id, image, text, date) VALUES ('{$_SESSION['user_id']}','$image','$text','$date')";
        mysqli_query($con, $query);
    }
}

// ================== SEARCH ==================
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search_name'])) {
    $search_name = $_POST['search_name'];
    $query = "SELECT * FROM users WHERE user_name LIKE '%$search_name%'";
    $result = mysqli_query($con, $query);
}

// ================== CHECK LOGIN FUNCTION ==================
function check_login($con) {
    if(isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1";
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: Social_Media_Login.php");
    die;
}

// ================== LOGOUT ==================
if(isset($_GET['logout'])) {
    unset($_SESSION['user_id']);
    header("Location: Social_Media_Login.php");
    die;
}
?>
