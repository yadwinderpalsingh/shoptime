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
                    <h2>Men</h2>
                </div>
                <div class="results">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 item">
                            <div class="product-img">
                                <img class="full-width img-responsive" src="../assets/images/men/17.jpg" alt="">
                            </div>
                            <div class="product-description margin-bottom-30">
                                <div class="pull-left">
                                    <h4 class="title-price">T-shirt</h4>
                                    <span class="gender text-uppercase">Men</span>
                                    <span class="gender">Casual</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">$60.00</span>
                                    <span class="title-qty">Qty: <input type="number" name="tshirt" min="0" max="15" value="<?php echo $_SESSION['men']['tshirt']; ?>"/></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 item">
                            <div class="product-img">
                                <img class="full-width img-responsive" src="../assets/images/men/18.jpg" alt="">
                            </div>
                            <div class="product-description margin-bottom-30">
                                <div class="pull-left">
                                    <h4 class="title-price">Cap</h4>
                                    <span class="gender text-uppercase">Men</span>
                                    <span class="gender">Casual</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">$30.00</span>
                                    <span class="title-qty">Qty: <input type="number" name="cap" min="0" max="15" value="<?php echo $_SESSION['men']['cap']; ?>"/></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 item">
                            <div class="product-img">
                                <img class="full-width img-responsive" src="../assets/images/men/21.jpg" alt="">
                            </div>
                            <div class="product-description margin-bottom-30">
                                <div class="pull-left">
                                    <h4 class="title-price">Shoe</h4>
                                    <span class="gender text-uppercase">Men</span>
                                    <span class="gender">Casual</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">$80.00</span>
                                    <span class="title-qty">Qty: <input type="number" name="shoe" min="0" max="15" value="<?php echo $_SESSION['men']['shoe']; ?>"/></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 item">
                            <div class="product-img">
                                <img class="full-width img-responsive" src="../assets/images/men/22.jpg" alt="">
                            </div>
                            <div class="product-description margin-bottom-30">
                                <div class="pull-left">
                                    <h4 class="title-price">Glasses</h4>
                                    <span class="gender text-uppercase">Men</span>
                                    <span class="gender">Casual</span>
                                </div>
                                <div class="product-price">
                                    <span class="title-price">$50.00</span>
                                    <span class="title-qty">Qty: <input type="number" name="glasses" min="0" max="15" value="<?php echo $_SESSION['men']['glasses']; ?>"/></span>
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