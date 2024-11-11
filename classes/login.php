
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include './lib/session.php';
    Session::checkLogin();
    include_once './lib/database.php';
    include './helper/format.php';
?>
<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'path/to/PHPMailer/src/PHPMailer.php'; 
// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/SMTP.php';


    class login {
        private $db;
        private $fm;
        
        public function __construct()
        {
            Session::init();
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function login($loginEmail,$loginPassword){
            // Kiểm tra kí tự trong email, pass
            $loginEmail = $this->fm->validation($loginEmail);
            $loginPassword = $this->fm->validation($loginPassword);
            // Kết nối với cơ sở dữ liệu
            $loginEmail = mysqli_real_escape_string($this->db->link, $loginEmail);
            $loginPassword = mysqli_real_escape_string($this->db->link, $loginPassword);
            // Nếu người dùng bỏ trống
            if (empty($loginEmail) || empty($loginPassword)){
                $alert = "Bạn không được bỏ trống Email và Mật khẩu";
                return $alert . "<br>" . "<br>";
            }else{
                // Nếu như người dùng nhập đúng ký tự thì sẽ tiến hành check role và tài khoản
                $query = "SELECT * FROM users WHERE Email = '$loginEmail' AND Pass = '$loginPassword' LIMIT 1";
                $result = $this->db->select($query);

                if($result != false){
                    $value = $result->fetch_assoc();
                    Session::set('login', true);
                    Session::set( 'UserID', $value['UserID']);
                    Session::set( 'Email', $value['Email']);
                    Session::set( 'UserName', $value['UserName']);
                    Session::set( 'Pass', $value['Pass']);
                    Session::set( 'Avatar', $value['Avatar']);
                    Session::set( 'Role', $value['Role']);
                    
                    if ($value['Role'] === 'admin') {
                        header('Location:ad_review/index.php');
                        exit(); 
                    } elseif  ($value['Role'] === 'User') {
                        header('Location:index.php');
                        exit();
                    }
                }else{
                    $alert = 'Email hoặc mật khẩu không đúng';
                    return $alert . "<br>" . "<br>";
                }
            }
        }


        // public function forgotpass($loginEmail_forgoted){
        //     // Check xem có mail trong csdl không
        //     $loginEmail_forgoted = $this->fm->validation($loginEmail_forgoted);
        //     $loginEmail_forgoted = mysqli_real_escape_string($this->db->link, $loginEmail_forgoted);
        //     if (empty($loginEmail_forgoted)){
        //         $alert = "Bạn không được bỏ trống ";
        //         return $alert . "<br>" . "<br>";
        //     }else{
        //         // nhập đúng thì gửi mã
        //         $query = "SELECT * FROM users WHERE Email = '$loginEmail_forgoted' LIMIT 1";
        //         $result = $this->db->update($query);
        //         if ($result->num_rows > 0) {
        //             // Tạo mã xác thực ngẫu nhiên
        //             $code = rand(100000, 999999);
            
        //             // Lưu mã xác thực vào database  cột 'reset_code' trong bảng 'users')
        //             $query = "UPDATE users SET reset_code = '$code' WHERE Email = '$loginEmail_forgoted";
        //             $result = $this->db->select($query);
                
        //             // Gửi mã qua email
        //             $subject = "Mã xác nhận đặt lại mật khẩu";
        //             $message = "Mã xác nhận của bạn là: " . $code;
        //             $headers = "From: no-reply@yourdomain.com";
            
        //             if (mail($loginEmail_forgoted, $subject, $message, $headers)) {
        //                 echo "Mã xác nhận đã được gửi tới email của bạn.";
        //             } else {
        //                 echo "Đã xảy ra lỗi khi gửi email. Vui lòng thử lại.";
        //             }
                    
        //         }else {
        //             echo "Email không tồn tại trong hệ thống.";
        //         }
        //     }   
        // }




        
    }
?>