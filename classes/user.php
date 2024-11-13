
<?php
    $filepath = realpath(dirname(__FILE__));
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once ($filepath . '/../lib/database.php');
    include_once ($filepath . '/../lib/session.php');
    include_once ($filepath . '/../helper/format.php');

// Session::checkSession();
?>
<?php
class Setting {
    private $userId;
    private $db;
    private $fm;
    private $userData;
    private $error;
    private $success;

    // Constructor: Khởi tạo và kết nối cơ sở dữ liệu
    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format(); 
        $this->loadUserData();
        $this->error = "";
        $this->success = false;
    }
    public function getError() {
        return $this->error;
    }
    public function getSuccess() {
        return $this->success;
    }
    public function showUser() {
        // Thay đổi câu truy vấn để lấy tất cả người dùng
        $query = "SELECT Email, Username, Pass, Avatar FROM users";
        $result = $this->db->select($query);
    
        // Trả về kết quả nếu có người dùng
        return $result;
    }
    // Load dữ liệu người dùng từ cơ sở dữ liệu
    public function loadUserData() {
        if(!isset($_SESSION['UserID'])){
            header('Location:login.php');
            exit(); 
        }
        $this->userId = $_SESSION['UserID'];
        $query = "SELECT Email, Username, Pass, Avatar FROM users WHERE UserID = '$this->userId'";
        $result = $this->db->select($query);
        
        if ($result) {
            $this->userData = $result->fetch_assoc();
        }
        return $this->userData;
    }

    // Lưu các thay đổi vào cơ sở dữ liệu
    public function save($user = []) {
        if(empty($user)){
            echo 'Lỗi thông tin cập nhật.';
            
        }else{

            $query = "UPDATE users 
                    SET Username = '{$user['Username']}', 
                        pass = '{$user['Password']}', 
                        avatar = '{$user['Avatar']}' 
                    WHERE 
                        UserID = '{$user['UserId']}'";
                if($this->db->update($query)){
                    $this->success = true;
                }
        }
    }

    function updateUser() {
        $user = [];
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $username = $_POST['Username'];
            $currentPassword = $_POST['current_password'];
            $newPassword = $_POST['new_password'];
            $avatarFile = $_FILES['avatars'];
    
            // Kiểm tra mật khẩu hiện tại có khớp với mật khẩu đã lưu không
            if (isset($currentPassword) && $this->userData['Pass'] == $currentPassword) {
                // Xuli thay doi mat khau
                if (!empty($newPassword)) {
                    // Mã hóa mật khẩu
                    $hashedNewPassword = $newPassword; 
                } else {
                    // Nếu không có mật khẩu mới, giữ nguyên mật khẩu hiện tại
                    $hashedNewPassword = $this->userData['Pass'];
                }
    
                // Kiểm tra xem ảnh đại diện có được tải lên không
                
                if (isset($avatarFile) && $avatarFile['error'] == 0) {
                    // Kiểm tra loại tệp và kích thước tệp
                    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                    if (in_array($avatarFile['type'], $allowedTypes)) {
                        $avatarFileName = time() . '-' . $avatarFile['name']; // Rename file to avoid duplicates
                        $avatarFilePath = "ad_review/uploads/" . $avatarFileName;
                        
                        // Di chuyển tệp tải lên vào  cơ sở dữ liệu
                        if (move_uploaded_file($avatarFile['tmp_name'], $avatarFilePath)) {
                            $user['Avatar'] = $avatarFilePath;
                        } else {
                            $this->error = "Lỗi khi tải lên ảnh đại diện.";
                            return;
                        }
                    } else {
                        $this->error = "Chỉ hỗ trợ các định dạng ảnh JPEG, PNG và GIF.";
                        return;
                    }
                } else {
                    // Giữ nguyên ảnh đại diện hành tại
                    $user['Avatar'] = $this->userData['Avatar'];
                }
    
                // Chuẩn bị dữ liệu để cập nhật (username, password, avatar)
                $user['Username'] = $username;
                $user['Password'] = $hashedNewPassword;
                $user['UserId'] = $this->userId;
    
                //  Lưu dữ liệu đã cập nhật vào database
                $this->save($user);
            } else {
                $this->error = "Mật khẩu sai! Đề nghị nhập lại mật khẩu.";
            }
        }
    }
    public function getUserById($userId) {
        $query = "SELECT * FROM users WHERE UserID = ?";
        $stmt = $this->db->select($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}

?>