<!DOCTYPE html>
<html>
    <?php 
        include 'head.php';
     ?>
<body>
    <?php 
        include 'nav.php';
    ?>
    <div class="maindiv2">
    <div class="container" ">
        
        <div class="row">
            <div class="col-sm-6 col-offset-3">
                <div class="well" style="margin-top:150px;>
                    <h1 class="text-center text-primary" style="padding-bottom: 20px">Login </h1>
                    <form class="form-horizontal" role="form" method="POST" action="login.php">

                        <div class="form-group">
                            <label for="email" class="col-sm-4 control-label">Username</label>

                            <div class="col-sm-6">
                                <input id="email" type="text" class="form-control" name="username" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-4 control-label">Password</label>

                            <div class="col-sm-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group" style="padding-top: 20px;margin-left: 50px">
                            <div class="col-sm-6 col-offset-3">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
