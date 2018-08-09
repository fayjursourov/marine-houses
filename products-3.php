<?php echo file_get_contents('header.php'); ?>



<!--ALL PRODUCTS-->
<div class="row">
    <div class="col-md-12">
        <div class="page-content-wrapper">
            <h1 class="other-pages-title">ALL PRODUCTS</h1>


            <!--more page-->
            <div class="text-center padding-top-10px">
                <div class="btn-group more-pages-group" role="group" aria-label="...">
                    <a class="btn btn-default" href="http://localhost/marine_houses/products-1.php">1</a>
                    <a class="btn btn-default" href="http://localhost/marine_houses/products-2.php">2</a>
                    <a class="btn btn-default" href="http://localhost/marine_houses/products-3.php">3</a>
                </div>
            </div>
            <!--more page-->


            <div class="other-pages-content">
                <div class="row text-center product-wrapper-hover">
                    <div class="col-md-3 col-sm-6">
                        <ul class="product-list">
                            <li><img class="product-img" src="asset/img/products/wifi_fish_finder.jpg"></li>
                            <li><div class="details-link"><a href="products-view.php?product=wifi_fish_finder">WiFi Fish Finder</a></div></li>
                            <li><div class="price">$59.90</div></li>
                            <li><div class="add-to-cart" data-toggle="modal" data-target=".bs-example-modal-sm">ADD TO CART</div></li>
                        </ul>
                    </div>
                </div>
            </div>

                <!--more page-->
                <div class="text-center padding-top-10px">
                    <div class="btn-group more-pages-group padding-bottom-10px" role="group" aria-label="...">
                        <a class="btn btn-default" href="http://localhost/marine_houses/products-1.php">1</a>
                        <a class="btn btn-default" href="http://localhost/marine_houses/products-2.php">2</a>
                        <a class="btn btn-default" href="http://localhost/marine_houses/products-3.php">3</a>
                    </div>
                </div>
                <!--more page-->
        </div>
    </div>
</div>

<!--    ALL PRODUCTS-->



<?php echo file_get_contents('footer.php'); ?>
