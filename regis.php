<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Your Account</title>
    <link rel="stylesheet" type="" href="regis.css">
    
    <!-- ICON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>
<body>
    <div class="container"> 
        <div class="screen">
            <div class="screen__content"> 
                <form action=""  method="POST" autocomplete="off" class="regis">

                    <h2>Registration</h2>
                    <div class="regis_field>
                        <i class="regis__icon fas fa-user"></i>
                        <label for="email">Email : </label>
                        <input type="text" class="regis__input" name="email" id="email" required value="" placeholder="Email"> <br>
                    </div>

                    <div class="regis_field>
                        <i class="regis__icon fas fa-user"></i>
                        <label for="username">Username : </label>
                        <input type="text" class="regis__input" name="username" id="username" required value="" placeholder="Username"> <br>
                    </div>

                    <div class="regis_field>
                        <i class="regis__icon fas fa-user"></i>
                        <label for="password">Password: </label>
                        <input type="password" class="regis__input" name="password" id="password" required value="" placeholder="Your Password"> <br>
                    </div>

                    <button type="submit" class="button regis__submit" name="submit">
                        <span class="button__text">Log In</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                </form>

                <br>
                <h5>Have an Account? <a href="login.php"> <span class="h5">Sign In</span></a></h5>

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