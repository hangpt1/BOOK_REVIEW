
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include './classes/login.php';
    
?>
<?php
    $class = new login();
        // Kiểm tra nếu người dùng nhấn nút "Thay đổi" trên form
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newPassword'])) {
        $newPassword = $_POST['newPassword'];
        
        // Gọi hàm newpass() để thay đổi mật khẩu
        $class->newpass($newPassword);
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
                <h2 class="form-title">Mật khẩu mới</h2><br>
               
                
                <label for="newPassword">Mật khẩu mới<span style="color:red;">*</span></label>
                <input type="password" id="newPassword" name="newPassword" placeholder="Password" ><br><br>
                <button type="submit" class="button-form" >Thay đổi</button>
                <div class="form-control">
                    <p>Chưa có tài khoản? <a href="./signup.php" id="showRegisterForm">Đăng ký</a></p>
                </div>
            </form>
        </div>
        </center>
    </div>

    

</body>
</html>
