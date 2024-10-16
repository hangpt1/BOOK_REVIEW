</div>
<script>
        document.getElementById("user_img").addEventListener("click", function() {
    var userMenu = document.getElementById("user_content");
    if (userMenu.style.display === "block") {
        userMenu.style.display = "none";
    } else {
        userMenu.style.display = "block";
    }
});

// Đóng menu dropdown khi click ra ngoài
window.onclick = function(event) {
    if (!event.target.matches('.user_img')) {
        var userMenus = document.getElementsByClassName("user-content");
        for (var i = 0; i < user_content.length; i++) {
            var openMenu = user_content[i];
            if (openMenu.style.display === "block") {
                openMenu.style.display = "none";
            }
        }
    }
}
    </script>
    <script src="./asset/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
