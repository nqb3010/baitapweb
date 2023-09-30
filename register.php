<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        function Ajaxregister(){
            var user = $('#user').val();
            var pass = $("#pass").val();
            var repass = $("#repass").val();
            if(!user || !pass || !repass){
                alert("Nhập tài khoản và mật khẩu");
            }
            else{
                $.post('/api/Ajaxregister.php',{user : user, pass : pass, repass : repass},function(result)
                {
                    if(result == "success"){
                        window.location = "home.php";
                    }else{
                        alert("fail");
                    }
                })
            }
        }
    </script>
</head>
<body>
    <form method="post" onsubmit="Ajaxregister();return false;">
    <input type="text" name="user" id="user" placeholder="Nhập tài khoản">
    <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu">
    <input type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu">
    <button type="submit">Register</button>
    </form>
</body>
</html>