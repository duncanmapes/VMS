<?php

if(isset($_POST['usernameValue']) && isset($_POST['passwordValue'])){
    session_start();
    
    $_SESSION['username'] = $_POST['usernameValue'];

    header('Location: dash.php');
}


 include('includes/head.php');
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Welcome to VMS Roadtrip Log<br>Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form id="login-form" role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="usernameValue" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="passwordValue" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="#" class="submit btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $('.submit').click(function(){
        $('#login-form').submit();
    });
    
</script>

</body>

</html>
