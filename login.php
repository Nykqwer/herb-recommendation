<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,500&display=swap" rel="stylesheet">
<style>
body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background-image: url("img/icons/herbbg1.png");
    background-size: cover;
}
</style>
</head>
<body>
<form action="includes/login_form.php" method="post">
    <div class="container">
        <div class="flex">
            <div class="left-flex">
                <div>
                    <img src="img/icons/herbal.gif" alt="" class="luffy-img">
                </div>
            </div>
            <div class="display-flex">
                <div>
                    <h4>LOGIN</h4>
                </div>
                <div>
                    <p>Username</p>
                    <input type="text" name="username" class="input-el">
                </div>
                <div>
                    <p>Password</p>
                    <input type="password" name="pass" class="input-el">
                </div>
                <div class="flex-btn">
                    <button type="submit" name="login" class="js-btn">Login</button>
                    <!-- Updated Register button -->
                    <a href="reg.php" style="text-decoration: none;"><button type="button" class="reg-btn" name="reg">Register</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

     
       
</body>
</html>




