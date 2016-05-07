 <?php require_once("../resources/config.php"); ?>


    <?php require(TEMPLATE_FRONT.DS."header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <header>
            <h1 class="text-center">Login</h1>
            <h2 class="text-center"><?php display_message(); ?></h2>
            <div class="col-sm-4 col-sm-offset-5">
                <form action="" method="post" enctype="multipart/form-data">
                <?php login_user(); ?>
                    <div class="form-group">
                        <label for="">username</label>
                        <input type="text" name="username" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="form-group">                        
                        <input type="submit" name="submit" id="" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </header>
     

       

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

   <?php require(TEMPLATE_FRONT.DS."footer.php"); ?>
   
   
   