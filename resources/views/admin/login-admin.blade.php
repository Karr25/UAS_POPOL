<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <base href="/assets/admin/login/purple_login/" />
    <title>Login Admin</title>
    <link rel="icon" href="images/icon_logo.png">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/assets/user/lib/noty.css" rel="stylesheet">
    <link href="/assets/user/lib/themes/metroui.css" rel="stylesheet">
</head>

<body>
    <!-- contact-form -->
    <div class="message warning">
        <div class="inset">
            <div class="login-head" style="">
                <h1>
                    <img src="images/klinik_logo.png" alt="" width="80" height="80" style="float: left; margin-top: -25px; margin-right: 25px">
                    Login Administrator
                </h1>
            </div>
            <form method="POST" action="">
                @csrf
                <li style="position: relative;">
                    <input type="text" class="text" name="email" placeholder="Email" required>
                    <span class="icon user" style="position: absolute; top: 0; right: 0;"></span>
                </li>
                <div class="clear"> </div>
                <li style="position: relative;">
                    <input type="password" name="password" placeholder="Password" required>
                    <span class="icon lock" style="position: absolute; top: 0; right: 0;"></span>
                </li>
                <div class="clear"> </div>
                <div class="submit">
                    <input type="submit" value="Login" name="login">
                    <!-- <h4><a href="#">Lost your Password ?</a></h4> -->
                    <div class="clear"> </div>
                </div>

            </form>

        </div>
    </div>
    </div>
    <div class="clear"> </div>
    <!--- footer --->
    <div class="footer">
        <!-- <p>Template by <a href="http://w3layouts.com">w3layouts</a></p> -->
    </div>
    
    <script src="/assets/user/lib/noty.min.js"></script>

    @if(request()->session()->has('loginError'))
    <script type="text/javascript">
        new Noty({
            text: "{{session('loginError')}}",
            timeout: 3000,
            theme: "metroui",
            type: "warning",
        }).show();
    </script>
    @endif
</body>

</html>