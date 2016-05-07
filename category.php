 <?php require_once("../resources/config.php"); ?>


    <?php require(TEMPLATE_FRONT.DS."header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbrotron header -->
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam animi, est autem magni dicta. Dolorem obcaecati, quae nesciunt provident omnis harum ullam ipsam eum libero, minus quaerat neque illo commodi!</p>
            <p><a href="" class="btn btn-primary btn-lg">Call to action</a></p>
        </header>
        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Feature</h3>
            </div>
        </div>


        <!-- Page Feature -->
        <div class="row text-center">
           <?php get_products_in_cat_page(); ?>
        </div>       
        <!-- ./row -->

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

   <?php require(TEMPLATE_FRONT.DS."footer.php"); ?>
   
   
   