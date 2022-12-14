<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    ?>
    <!DOCTYPE html>

    <html>

    <head>

        <title> Insert Products </title>


        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: '#product_desc,#product_features'});</script>

    </head>

    <body>

    <div class="row"><!-- row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Insert Products

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Insert Products

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal Starts -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Title </label>

                            <div class="col-md-6">

                                <input type="text" name="product_title" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Select A Manufacturer </label>

                            <div class="col-md-6">

                                <select class="form-control" name="manufacturer"><!-- select manufacturer Starts -->

                                    <option> Select A Manufacturer</option>

                                    <?php

                                    $get_manufacturer = "select * from manufacturers";
                                    $run_manufacturer = mysqli_query($con, $get_manufacturer);
                                    while ($row_manufacturer = mysqli_fetch_array($run_manufacturer)) {
                                        $manufacturer_id = $row_manufacturer['manufacturer_id'];
                                        $manufacturer_title = $row_manufacturer['manufacturer_title'];

                                        echo "<option value='$manufacturer_id'>
$manufacturer_title
</option>";

                                    }

                                    ?>

                                </select><!-- select manufacturer Ends -->

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Category </label>

                            <div class="col-md-6">

                                <select name="product_cat" class="form-control">

                                    <option> Select a Product Category</option>


                                    <?php

                                    $get_p_cats = "select * from product_categories";

                                    $run_p_cats = mysqli_query($con, $get_p_cats);

                                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                                        $p_cat_id = $row_p_cats['p_cat_id'];

                                        $p_cat_title = $row_p_cats['p_cat_title'];

                                        echo "<option value='$p_cat_id' >$p_cat_title</option>";

                                    }


                                    ?>


                                </select>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Category </label>

                            <div class="col-md-6">


                                <select name="cat" class="form-control">

                                    <option> Select a Category</option>

                                    <?php

                                    $get_cat = "select * from categories ";

                                    $run_cat = mysqli_query($con, $get_cat);

                                    while ($row_cat = mysqli_fetch_array($run_cat)) {

                                        $cat_id = $row_cat['cat_id'];

                                        $cat_title = $row_cat['cat_title'];

                                        echo "<option value='$cat_id'>$cat_title</option>";

                                    }

                                    ?>


                                </select>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Image 1 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img1" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Image 2 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img2" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Image 3 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img3" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Image 4 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img4" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Image 5 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img5" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Price </label>

                            <div class="col-md-6">

                                <input type="text" name="product_price" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Sale Price </label>

                            <div class="col-md-6">

                                <input type="text" name="psp_price" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Description </label>

                            <div class="col-md-6">

                                <textarea name="product_desc" class="form-control" rows="15"
                                          id="product_desc"></textarea>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Select Review </label>

                            <div class="col-md-6">

                                <select class="form-control" name="review"><!-- select manufacturer Starts -->

                                    <option> Select Review</option>

                                    <option value='1'>1 star review</option>
                                    <option value='1.5'>1.5 star review</option>
                                    <option value='2'>2 star review</option>
                                    <option value='2.5'>2.5 star review</option>
                                    <option value='3'>3 star review</option>
                                    <option value='3.5'>3.5 star review</option>
                                    <option value='4'>4 star review</option>
                                    <option value='4.5'>4.5 star review</option>
                                    <option value='5'>5 star review</option>

                                </select><!-- select manufacturer Ends -->

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> </label>

                            <div class="col-md-6">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="showOnSlide">
                                    <label class="form-check-label" for="showOnSlide">
                                        Show this product on slide at Starting page
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="showAsNewProduct">
                                    <label class="form-check-label" for="showAsNewProduct">
                                        Show this product as New Product at Starting page
                                    </label>
                                </div>
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="submit" value="Insert Product"
                                       class="btn btn-primary form-control">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->


    </body>

    </html>

    <?php

    if (isset($_POST['submit'])) {

        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $manufacturer_id = $_POST['manufacturer'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $psp_price = $_POST['psp_price'];
        $product_review = $_POST['review'];


        $status = "product";


        if (isset($_POST['showOnSlide']) == null) {
            $showOnSlide = "false";
        } else {
            $showOnSlide = "true";
        }

        if (isset($_POST['showAsNewProduct']) == null) {
            $showAsNewProduct = "false";
        } else {
            $showAsNewProduct = "true";
        }


        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];
        $product_img4 = $_FILES['product_img4']['name'];
        $product_img5 = $_FILES['product_img5']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];
        $temp_name4 = $_FILES['product_img4']['tmp_name'];
        $temp_name5 = $_FILES['product_img5']['tmp_name'];

        srand(mktime(0));
        $name_prefix1 = rand();
        $product_img1 = $name_prefix1 . $product_img1;
        move_uploaded_file($temp_name1, "product_images/$product_img1");

        srand(mktime(1));
        $name_prefix2 = rand();
        $product_img2 = $name_prefix2 . $product_img2;
        move_uploaded_file($temp_name2, "product_images/$product_img2");

        srand(mktime(2));
        $name_prefix3 = rand();
        $product_img3 = $name_prefix3 . $product_img3;
        move_uploaded_file($temp_name3, "product_images/$product_img3");

        srand(mktime(3));
        $name_prefix4 = rand();
        $product_img4 = $name_prefix4 . $product_img4;
        move_uploaded_file($temp_name4, "product_images/$product_img4");

        srand(mktime(4));
        $name_prefix5 = rand();
        $product_img5 = $name_prefix5 . $product_img5;
        move_uploaded_file($temp_name5, "product_images/$product_img5");


        $insert_product = "insert into products (p_cat_id,cat_id,manufacturer_id,date,product_title,product_img1,product_img2,product_img3,product_img4,product_img5,product_price,product_psp_price,product_desc,product_review,status,showOnSlide,showAsNewProduct) values ('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_img4','$product_img5','$product_price','$psp_price','$product_desc','$product_review','$status','$showOnSlide','$showAsNewProduct')";

        $run_product = mysqli_query($con, $insert_product);

        if ($run_product) {

            echo "<script>alert('Product has been inserted successfully')</script>";

            echo "<script>window.open('index.php?view_products','_self')</script>";

        }

    }

    ?>

<?php } ?>
