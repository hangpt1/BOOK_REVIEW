
<?php
    include './lib/session.php';
    Session::checkLogin();
    // Lấy đường dẫn đúng của file
    $filepath = realpath(dirname(__FILE__));
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once ($filepath . '/../lib/database.php');
    include_once ($filepath . '/../helper/format.php');
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
                $alert = "<span style='color:red;!important' class='success'>Bạn không được bỏ trống</span>";
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
                    $alert = "<span style='color:red;!important' class='success'>Email hoặc mật khẩu không đúng</span>";
                    return $alert . "<br>" . "<br>";
                }
            }
        }


        public function forgotpass($loginEmail_forgoted){
            // Check xem có mail trong csdl không
            $loginEmail_forgoted = $this->fm->validation($loginEmail_forgoted);
            $loginEmail_forgoted = mysqli_real_escape_string($this->db->link, $loginEmail_forgoted);
            if (empty($loginEmail_forgoted)){
                $alert = "Bạn không được bỏ trống ";
                return $alert . "<br>" . "<br>";
            }else{
                // nhập đúng thì kiểm tra email có trong csdl chưa
                $query = "SELECT * FROM users WHERE Email = '$loginEmail_forgoted'";
                $result = $this->db->select($query);
                // Nếu có thì chuyển đến trang nhập mk mới
                if($result != false){
                    $value = $result->fetch_assoc();
                    
                    Session::set( 'email', $value['Email']);
                    
                    // $alert = "<span style='color:green;!important' class='success'>Hãy đổi mật khẩu</span>";
                    header('Location: newpass.php');
                    exit(); 
                    
                }else{
                    $alert = "<span style='color:red;!important' class='success'>Bạn chưa có tài khoản, hãy đăng ký</span>";
                    return $alert . "<br>" . "<br>";
                }
            }   
        }
        public function newpass($newPassword) {
            
        // Kiểm tra xem có session email hay không
        if (!isset($_SESSION['email'])) {
            echo "Phiên làm việc đã hết hạn. Vui lòng thử lại.";
            return;
        }
        $email = $_SESSION['email'];

    
    // Kiểm tra mật khẩu mới có rỗng không
        $newPassword = $this->fm->validation($newPassword);
        if (empty($newPassword)) {
            echo "Mật khẩu mới không được để trống.";
            return;
        }

    // Mã hóa mật khẩu mới
    $hashedPassword = $newPassword /**password_hash($newPassword, PASSWORD_DEFAULT)*/;

    // Cập nhật mật khẩu trong cơ sở dữ liệu
    $query = "UPDATE users SET Pass = '$hashedPassword' WHERE Email = '$email'";
    if ($this->db->update($query)) {
        // Xóa session sau khi thay đổi mật khẩu thành công
        unset($_SESSION['email']);
        header('Location: index.php');
    } else {
        echo "Đã xảy ra lỗi. Vui lòng thử lại.";
    }
}





        
    }
?>