<?php
    include './lib/session.php';
    Session::checkLogin();
    include './lib/database.php';
    include './helper/format.php';

?>

<?php
    
    class login {
        private $db;
        private $fm;
        public function __construct()
        {
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
                return $alert . "<br>";
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
                    Session::set( 'Password', $value['Password']);
                    Session::set( 'Avatar', $value['Avatar']);
                    Session::set( 'Role', $value['Role']);
                    header('Location:index.php');
                    // if ($value['Role'] === 'admin') {
                    //     header('Location:ad_review/index.php');
                    //     exit(); // Kết thúc script
                    // } else {
                    //     header('Location:index.php');
                    //     exit();
                    // }
                    
                }else{
                    $alert = 'Email hoặc mật khẩu không đúng';
                    return $alert . "<br>" . "<br>";
                }
            }
        }
    }
?>