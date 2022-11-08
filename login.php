<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account</title>
    <link rel="stylesheet" href="login.css">

    <!-- ICON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>
<body>
    <div class="container"> 
        <div class="screen"> 
            <div class="screen__content"> 
                <form action=""  method="POST" autocomplete="off" class="login">

                    <h2>Login</h2>
                    <div class="login_field>
                        <i class="login__icon fas fa-user"></i>
                        <label for="usernamemail">Email or Username : </label>
                        <input type="text" class="login__input" name="usernamemail" id="usernamemail" required value="" placeholder="Email or Username"> <br>
                    </div>

                    <div class="login_field>
                        <i class="login__icon fas fa-user"></i>
                        <label for="password">Password: </label>
                        <input type="password" class="login__input" name="password" id="password" required value="" placeholder="Your Password"> <br>
                    </div>

                    <button type="submit" class="button login__submit" name="submit">
                        <span class="button__text">Log In</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                </form>

                <br>
                <h5>Don't Have an Account? <a href="regis.php"> <span class="h5">Registration</span></a></h5>

            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>
</html>