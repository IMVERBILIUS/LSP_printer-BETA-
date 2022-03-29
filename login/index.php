<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container-box">
        <h2><i>Reshop</i></h2>
        <h3>Login Your Account</h3>

        <form action="process.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" id="" class="form-control"><br/> <br/>

            <label>Password</label>
            <input type="password" name="password" id="" class="form-control"><br><br>

            <button type="submit" name="login">Login</button>

            <div class="register">
                <small>Belum punya akun?<br>
                <a href="../register/index.php">Register</a>
                </small>
            </div>
        </form>
    </div>
</body>
</html>