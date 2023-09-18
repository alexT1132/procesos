<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Login</header>
            </div>
            <form action="home.php" method="post">
                <div class="input-field">
                    <input type="text" class="input" name="username" placeholder="Username">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="password" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>