<?php

    include './inc/header.php';

?>

<div class="profile-section">
        <?php
            $setting = new Setting();
            $setting->updateUser();
            $error = $setting->getError();
            $success = $setting->getSuccess();
        ?>
        <form action="setting.php" method="POST" enctype="multipart/form-data">

        
        
            <div class="avatar-container">
                <img src="<?php echo $setting->loadUserData()['Avatar']; ?>" alt="Avatar" id="avatar-preview">
                <label for="avatar" class="change-avatar-button">Đổi ảnh đại diện</label>
                <input type="file" name="avatars" id="avatar" accept="image/*" onchange="previewAvatar()" style="display: none;">
            </div>

        
            <div class="form-container_st">
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <?php if ($success) : ?>
                        <div class="alert alert-success">Cập nhật thông tin thành công</div>
                    <?php endif; ?>
                
                    <div class="form-container-2">

                        <label for="email">Email:</label>
                        <input type="email" name="Email" id="email" value="<?php echo $setting->loadUserData()['Email']; ?>"  disabled>
            
                        <label for="username">Tên đăng nhập:</label>
                        <input type="text" name="Username" id="username" value="<?php echo $setting->loadUserData()['Username']; ?>" required>
            
                        <label for="current_password">Mật khẩu hiện tại</label>
                        <input type="password" name="current_password" id="current_password" required>
            
                        <label for="new_password">Mật khẩu mới</label>
                        <input type="password" name="new_password" id="new_password">
                    </div>

                    <button type="submit" name="submit">Thay đổi thông tin</button>
                
            </div>
        </form>
    </div>
    
    


<script>
    function previewAvatar() {
        var file = document.getElementById("avatar").files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("avatar-preview").src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
</script>
<?php
    include './inc/footer.php'
?>
</body>
</html>