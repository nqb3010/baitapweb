<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include jQuery library separately -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
        // Define the Ajaxlogin() function
        function Ajaxlogin() {
            var user = $("#user").val();
            var pass = $("#pass").val();
            if (!user || !pass) {
                alert("Please enter username and password");
                return false;
            } else {
                $.post("api/Ajaxlogin.php", { user: user, pass: pass }, function(result) {
                    if (result === "success") {
                        window.location = "home.php";
                    } else {
                        Swal.fire('Oops...',result,'error')
                    }
                });
                return false;
            }
        }
    </script>
</head>
<body>
    <form method="post" onsubmit="Ajaxlogin();return false;">
        <input type="text" name="user" id="user" placeholder="Nhập tài khoản">
        <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu">
        <button type="submit">Login</button>
    </form>  
</body>
</html>
