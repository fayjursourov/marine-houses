<?php echo file_get_contents('header.php'); ?>


<div class="product-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-md-4">
            <img class="product-img-details" src="asset/img/products/<?php echo $_GET['product']; ?>.jpg">
        </div>
        <div class="col-md-8 text-center">
            <h1 class="product-name margin-bottom-0 margin-top-0 text-center">
                <?php
                $file_name = './asset/img/products/' . $_GET['product'] . '_title.txt';
                $txt = file_get_contents($file_name);
                echo $txt;
                ?>
            </h1>
            <div class="price-availability-in-stock">
                <span class="price">
                    <?php
                    $file_name = './asset/img/products/' . $_GET['product'] . '_price.txt';
                    $txt = file_get_contents($file_name);
                    echo $txt;
                    ?>
                </span>
                <span class="availability">Availability:</span>
                <span class="in-stock">In stock</span>
            </div>
            <div class="qty-cart">
                <span><span>Qty:</span> <input class="qut-input" type="number" value="1" min="1"></span>
                <span class="add-to-cart" data-toggle="modal" data-target=".bs-example-modal-sm">ADD TO CART</span>
            </div>

        </div>
    </div>
    <div class="row padding-top-20px">
        <div class="col-md-12">
            <h1 class="details--h1">Details</h1>
            <?php
            $file_name = './asset/img/products/' . $_GET['product'] . '_details.txt';
            $txt = file_get_contents($file_name);
            echo $txt;
            ?>
        </div>
    </div>
</div>



<?php echo file_get_contents('footer.php'); ?>
