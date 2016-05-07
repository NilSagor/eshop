 <?php require_once("../resources/config.php"); ?>


    <?php require(TEMPLATE_FRONT.DS."header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbrotron header -->
        <header class="jumbotron hero-spacer">
            <h1>Shop</h1>            
        </header>
        <hr>

     

        <!-- Page Feature -->
        <div class="row text-center">
           <?php get_products_in_shop_page(); ?>
        </div>       
        <!-- ./row -->

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

   <?php require(TEMPLATE_FRONT.DS."footer.php"); ?>
   
   
   