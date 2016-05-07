<?php require_once("../resources/config.php"); ?>


    <?php require(TEMPLATE_FRONT.DS."header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

              <?php require(TEMPLATE_FRONT.DS."side_nav.php"); ?>

              <?php 
              $query=query("SELECT*FROM products WHERE product_id=".escape_string($_GET['id'])." ");
confirm($query);
while ($row=fetch_array($query)) :


 ?>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-7">
                        <img src="../resources/<?php echo ($row['product_image']);?>" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <div class="thumbnail">
                            <div class="caption-full">
                                <h4><a href="#"><?php echo $row['product_title']; ?></a></h4>
                                <hr>
                                <h4 class="">&#36;<?php echo $row['product_price']; ?></h4>
                                <div class="ratings">
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span> 5.0 stars
                                    </p>
                                </div>
                                <p><?php echo $row['product_short_desc'];?></p>
                                <form action="">
                                    <div class="form-group">
                                        <a href="../resources/cart.php?add=<?php echo $row['product_id'];?>"  class="btn btn-primary">Add to cart</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <!-- Row for tab Panel -->
                <div class="row">
                    <div role="tabpanel">
                        <!-- Nab tabs -->
                        <ul class="nav nav-tabs"role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-contols="home" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#profile" aria-contols="profile" role="tab" data-toggle="tab">Reviews</a></li>
                        </ul>
                        <!-- tab content -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <p></p>
                                <p><?php echo $row['product_description'];?></p>
                                
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">
                                <div class="col-md-6">
                                    <h3>2 Reviews From</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>Annonymous
                                            <span class="pull-right">15 days ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi esse, quidem harum sunt perspiciatis porro fugiat aperiam. Earum totam, repellendus voluptates quibusdam adipisci commodi, eveniet labore quae tempora, voluptate obcaecati?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Add a Review</h3>
                                    <form action="" class="form-inline">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div>
                                            <h3>Your Ratings</h3>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./row for tab panel -->

               


            </div>
            <!-- ./col-md-9 -->
        <?php endwhile; ?>

        </div>
        <!-- ./row -->

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

   <?php require(TEMPLATE_FRONT.DS."footer.php"); ?>