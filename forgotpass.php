
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include './classes/login.php';
?>
<?php
    $class = new login();
    // Nếu như sever rq = post thì lấy dữ liệu
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $loginEmail_forgoted  = $_POST['loginEmail_forgoted'];
        $result = $class->forgotpass($loginEmail_forgoted);
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu BookReview</title>
    <link rel="stylesheet" href="./asset/css/base.css">
    <link rel="stylesheet" href="./asset/css/main.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.2-web (1)/fontawesome-free-6.5.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body> 
    <div class="container_login_signup">
        <center>
        <div class="form-container">
            <form id="forgotpassForm" class="form" action="" method="POST"  >
                <h2 class="form-title">Quên mật khẩu</h2><br>
                <?php
                if(isset($result)){
                    echo $result;
                }
                ?>
                <label for="loginEmail_forgoted">Email <span style="color:red;">*</span></label>
                <input type="email" id="loginEmail_forgoted" name="loginEmail_forgoted" placeholder="Email" ><br><br>
                <button type="submit"  class="button-form" name="submit">Kiểm tra</button>
                <div class="form-control">
                    <p>Chưa có tài khoản? <a href="./signup.php" id="showRegisterForm">Đăng ký</a></p>
                </div>
            </form>
        </div>
        </center>
    </div>

    

</body>
</html>
