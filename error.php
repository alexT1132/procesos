<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>404 page not found</title>
</head>
<style>
    * {
        font-family: "Space Mono", monospace;
        line-height: 1.5;
        color: #333;
    }
    
    body {
        overflow-x: hidden;
    }
    
    .nav-title {
        width: 100vw;
        margin: 20px 0px 0px 60px;
    }
    
    .container {
        margin: 20px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .content__button {
        text-decoration: none;
        background-color: #444;
        color: white;
        padding: 20px;
        margin: 20px 0px;
        position: absolute;
    }
    
    
    .content {
        max-width: 400px;
        height: 400px;
        margin-top: 150px;
    }
    
    .content__title {
        font-size: 40px;
    }
    
    
    footer {
        width:100%;
        text-align: center;
        position:relative;
        bottom:-100px;
    }
</style>

<body>
    <nav>
        <h2 class="nav-title">404 NOT FOUND</h2>
    </nav>
    <main class="container">
        <div class="content">
            <h1 class="content__title">I have bad news for you</h1>
            <p class="content__text">The page you are looking for might be removed or is temporarily unavailable</p>
            <a href="index.php" class="content__button">BACK TO LOGIN</a>
        </div>
    </main>
</body>

</html>