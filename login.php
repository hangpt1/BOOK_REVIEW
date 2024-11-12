
<?php
    include './classes/login.php';
   
?>
<?php
    $class = new login();
    // Nếu như sever rq = post thì lấy dữ liệu
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $loginEmail  = $_POST['loginEmail'];
        $loginPassword  = $_POST['loginPassword'];
        // check format cho thông tin login
        $login_check = $class->login($loginEmail,$loginPassword);

    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập BookReview</title>
    <link rel="stylesheet" href="./asset/css/base.css">
    <link rel="stylesheet" href="./asset/css/main.css">
    <!-- <link rel="stylesheet" href="assets/fontawesome-free-6.5.2-web (1)/fontawesome-free-6.5.2-web/css/all.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body> 
    <div class="container_login_signup">
        <center>
        <div class="form-container">
            <form id="loginForm" class="form" action="login.php" method="POST"  >
                <h2 class="form-title">Đăng nhập</h2><br>
                <span><?php
                if(isset($login_check)){
                    echo $login_check;
                }
                ?></span>
                <label for="loginEmail">Email <span style="color:red;">*</span></label>
                <input type="email" id="loginEmail" name="loginEmail" placeholder="Email" ><br><br>
                <label for="loginPassword">Mật khẩu <span style="color:red;">*</span></label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Password" ><br><br>
                <input type="submit" class="button-form"  value="Đăng nhập"></input>
                <div class="form-control">
                    <p>Chưa có tài khoản? <a href="./signup.php" id="showRegisterForm">Đăng ký</a></p>
                    <p>Quên mật khẩu? <a href="./forgotpass.php" id="showForgotPasswordForm">Quên mật khẩu</a></p>
                </div>
            </form>
        </div>
        </center>
    </div>

    

</body>
</html>
