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
                <h2>Women</h2>
            </div>

            <div class="results">
                <div class="row">
                    <div class="col-sm-6 col-md-4 item">
                        <div class="product-img">
                            <img class="full-width img-responsive" src="../assets/images/women/1.jpg" alt="">
                        </div>
                        <div class="product-description margin-bottom-30">
                            <div class="pull-left">
                                <h4 class="title-price">Dress 1</h4>
                                <span class="gender text-uppercase">Women</span>
                                <span class="gender">Casual</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$60.00</span>
                                <span class="title-qty">Qty: <input type="number" name="dress1" value="<?php echo $_SESSION['women']['dress1']; ?>" min="0" max="15"/></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 item">
                        <div class="product-img">
                            <img class="full-width img-responsive" src="../assets/images/women/2.jpg" alt="">
                        </div>
                        <div class="product-description margin-bottom-30">
                            <div class="pull-left">
                                <h4 class="title-price">Dress 2</h4>
                                <span class="gender text-uppercase">Women</span>
                                <span class="gender">Casual</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$60.00</span>
                                <span class="title-qty">Qty: <input type="number" name="dress2" value="<?php echo $_SESSION['women']['dress2']; ?>" min="0" max="15"/></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 item">
                        <div class="product-img">
                            <img class="full-width img-responsive" src="../assets/images/women/3.jpg" alt="">
                        </div>
                        <div class="product-description margin-bottom-30">
                            <div class="pull-left">
                                <h4 class="title-price">Dress 3</h4>
                                <span class="gender text-uppercase">Women</span>
                                <span class="gender">Casual</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$60.00</span>
                                <span class="title-qty">Qty: <input type="number" name="dress3" value="<?php echo $_SESSION['women']['dress3']; ?>" min="0" max="15"/></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 item">
                        <div class="product-img">
                            <img class="full-width img-responsive" src="../assets/images/women/4.jpg" alt="">
                        </div>
                        <div class="product-description margin-bottom-30">
                            <div class="pull-left">
                                <h4 class="title-price">Dress 4</h4>
                                <span class="gender text-uppercase">Women</span>
                                <span class="gender">Casual</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$60.00</span>
                                <span class="title-qty">Qty: <input type="number" name="dress4" value="<?php echo $_SESSION['women']['dress4']; ?>" min="0" max="15"/></span>
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