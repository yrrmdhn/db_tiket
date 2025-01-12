<!DOCTYPE html>
<html>
<head>
    <title>AIRPORT CR7</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box-log">
    <h1 class="title">LOGIN AKUN</h1>
    <form action="cek-login.php" method="post">
        <table class="khusus">
            <tr>
                <td>UserName</td>
                <td>:</td>
                <td><input type="text" name="user" 
                  required=""></input></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass" class="submit"
                  required=""></input></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" class="submit kanan" value="masuk"
                  required=""></input></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>