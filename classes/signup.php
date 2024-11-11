
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include './lib/session.php';
    include_once './lib/database.php';
    include './helper/format.php';
?>
<?php

    class Signup{
        private $db;
        private $fm;
        public function __construct()
        {
            Session::init();
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function Signup($signupEmail, $signupName, $signupPassword){
            // Kiểm tra kí tự trong email, pass
            $signupEmail = $this->fm->validation($signupEmail);
            $signupName = $this->fm->validation($signupEmail);
            $signupPassword = $this->fm->validation($signupPassword);
            // Kết nối với cơ sở dữ liệu
            $signupEmail = mysqli_real_escape_string($this->db->link, $signupEmail);
            $signupName = mysqli_real_escape_string($this->db->link, $signupName);
            $signupPassword = mysqli_real_escape_string($this->db->link, $signupPassword);
            // Nếu người dùng bỏ trống
            if (empty($signupEmail) || empty($signupName) || empty($signupPassword)){
                $alert = "Bạn không được bỏ trống ";
                return $alert . "<br>" . "<br>";
            }else{
        
                // // Nếu như người dùng nhập đúng ký tự thì sẽ tiến hành check role và tài khoản
                // $query = "INSERT INTO users( Email, Username, Pass, Avatar, Role) VALUES('$signupEmail', '$signupName', '$signupPassword', '','User')";
                // $result = $this->db->insert($query);
                // if($result != false){
                //     $alert = "<span style='color:green;!important' class='success'>Đăng ký thành công, chào mừng đến với BOOKREVIEW</span>";
                //     return $alert . "<br>" . "<br>";
                //     header('Location:login.php');
                //     exit();
                    
                // }else{
                //     $alert = "<span style='color:red;!important' class='success'>Đăng ký không thành công!</span>";
                //     return $alert . "<br>" . "<br>";
                // }


                // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu chưa
                $checkEmailQuery = "SELECT * FROM users WHERE Email = '$signupEmail'";
                $checkResult = $this->db->select($checkEmailQuery);
                if ($checkResult != false) {
                    // Nếu email đã tồn tại, in ra thông báo
                    $alert = "Bạn đã có tài khoản, hãy đăng nhập nhé!";
                    return $alert . "<br>" . "<br>";
                } else {
                    // Nếu email chưa tồn tại, tiến hành thêm mới tài khoản
                    $query = "INSERT INTO users(Email, Username, Pass, Avatar, Role) VALUES('$signupEmail', '$signupName', '$signupPassword', '', 'User')";
                    $result = $this->db->insert($query);
        
                    if ($result != false) {
                        $alert = "<span style='color:green;!important' class='success'>Đăng ký thành công, chào mừng đến với BOOKREVIEW</span>";
                        return $alert . "<br>" . "<br>";
                        header('Location:login.php');
                        exit();
                    } else {
                        $alert = "<span style='color:red;!important' class='success'>Đăng ký không thành công!</span>";
                        return $alert . "<br>" . "<br>";
                    }
                }
            }
        }

    }
?>