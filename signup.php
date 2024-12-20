<?php
    include './classes/signup.php';
?>
<?php
    $class = new Signup();
    // Nếu như sever rq = post thì lấy dữ liệu
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $signupEmail  = $_POST['signupEmail'];
        $signupName  = $_POST['signupName'];
        $signupPassword  = $_POST['signupPassword'];
        // check format cho thông tin signup
        $signup_check = $class->Signup($signupEmail, $signupName, $signupPassword);

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký BookReview</title>
    <link rel="stylesheet" href="./asset/css/base.css">
    <link rel="stylesheet" href="./asset/css/main.css">
    <!-- <link rel="stylesheet" href="assets/fontawesome-free-6.5.2-web (1)/fontawesome-free-6.5.2-web/css/all.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container_login_signup">
            <center>
            <div class="form-container">
                <form id="signupForm" class="form" action="?action=signup" method="POST"  >
                    <h2 class="form-title">Đăng ký</h2><br>
                    <?php
                    if(isset($signup_check)){
                        echo $signup_check;
                    }
                    ?>
                    <label for="signupEmail">Email <span style="color:red;">*</span></label>
                    <input type="email" id="signupEmail" name="signupEmail" placeholder="Email" ><br><br>
                    <!-- <small>Error message</small> -->
                     
                    <label for="signupName">Name <span style="color:red;">*</span></label>
                    <input type="text" id="signupName" name="signupName" placeholder="Name" ><br><br>
                    <!-- <small>Error message</small> -->
                    <label for="signupPassword">Mật khẩu <span style="color:red;">*</span></label>
                    <input type="password" id="signupPassword" name="signupPassword" placeholder="Password" ><br><br>
                    <!-- <small>Error message</small> -->
                    <button type="submit" class="button-form">Đăng ký</button>
                    <div class="form-control">
                        <p>Đã có tài khoản? <a href="./login.php">Đăng nhập</a></p>
                    </div>
                </form>
            </div>
            </center>
        </div>
    

</body>
</html>
