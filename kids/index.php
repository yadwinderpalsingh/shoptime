<?php
    session_start();
    if(!(isset($_SESSION['username']) && $_SESSION['username'] != '')){
        header("Location: /shoptime/");
    }
    include('../header.php');
?>

    <div class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="category">
                    <h2>Kids</h2>
                </div>

                <div class="results">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 item">
                            <div class="product-img">
                                <img class="full-width img-responsive" src="../assets/images/kids/1.jpg" alt="">
                            </div>
                            <div class="product-description margin-bottom-30">
                                <div class="pull-left">
                                    <h4 class="title-price">Shorts</h4>
                                    <span class="gender text-uppercase">Kids</span>
                                    <span class="gender">Casual</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">$60.00</span>
                                    <span class="title-qty">Qty: <input type="number" name="shorts" value="<?php echo $_SESSION['kids']['shorts']; ?>" min="0" max="15"/></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 item">
                            <div class="product-img">
                                <img class="full-width img-responsive" src="../assets/images/kids/2.jpg" alt="">
                            </div>
                            <div class="product-description">
                                <div class="pull-left">
                                    <h4 class="title-price">T-shirts</h4>
                                    <span class="gender text-uppercase">Kids</span>
                                    <span class="gender">Casual</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">$60.00</span>
                                    <span class="title-qty">Qty: <input type="number" name="tshirts" value="<?php echo $_SESSION['kids']['tshirts']; ?>" min="0" max="15"/></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 item">
                            <div class="product-img">
                                <img class="full-width img-responsive" src="../assets/images/kids/3.jpg" alt="">
                            </div>
                            <div class="product-description">
                                <div class="pull-left">
                                    <h4 class="title-price">T-shirt</h4>
                                    <span class="gender text-uppercase">Kids</span>
                                    <span class="gender">Casual</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">$60.00</span>
                                    <span class="title-qty">Qty: <input type="number" name="tshirtkid" value="<?php echo $_SESSION['kids']['tshirtkid']; ?>" min="0" max="15"/></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 item">
                            <div class="product-img">
                                <img class="full-width img-responsive" src="../assets/images/kids/4.jpg" alt="">
                            </div>
                            <div class="product-description">
                                <div class="pull-left">
                                    <h4 class="title-price">Jean</h4>
                                    <span class="gender text-uppercase">Kids</span>
                                    <span class="gender">Casual</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">$60.00</span>
                                    <span class="title-qty">Qty: <input type="number" name="jean" value="<?php echo $_SESSION['kids']['jean']; ?>" min="0" max="15" /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('../footer.php');
?>