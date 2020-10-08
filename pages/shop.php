<?php
session_start();
require '../functions.php';

if(!empty($_GET)){
    $product = $_GET['product'];
    addArticle($product);
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../layouts/head.php' ?>
   <title>Shop</title>
</head>
<body>
    <?php include '../layouts/header.php'; ?>

    <div class="header-shop">
    </div>
    <section class="section-shop">
        <h2 class="title2-home">SHOP THE CUCURZY
            <hr>
        </h2>

        <div class="flex-container1-shop">
            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/pattypan-pic.jpg' alt="woman athletes sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">PATTYPAN</h3>
                    <p>The cucurbit master</p>
                    <form action="cart.php">
                        <input class="name-d-none" type="text" name="product" value="pattypan">
                        <input class="price-shop" type="text" name="price" value="100€">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>
    

            <div class="flex-box-shop">
                <div class="flex-box-home-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/pumpkin.jpg' alt="woman athletes sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">PUMPKIN</h3>
                    <p>The orange power</p>
                    <form>
                        <input class="name-d-none" type="text" name="product" value="pumpkin">
                        <input class="price-shop" type="text" name="price" value="100€">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/watermelon.jpg.jpeg' alt="events with pumpkin sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">WATERMELON</h3>
                    <p>Fall vibes</p>
                    <form>
                    <input class="name-d-none" type="text" name="product" value="watermelon">
                        <input class="price-shop" type="text" name="price" value="6€">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/butternut.jpg' alt="events with pumpkin sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">BUTTERNUT</h3>
                    <p>Fall vibes</p>
                    <form>
                    <input class="name-d-none" type="text" name="product" value="butternut">
                        <input class="price-shop" type="text" name="price" value="100€">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/pickles.jpg' alt="events with pumpkin sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">PICKLES</h3>
                    <p>Fall vibes</p>
                    <form>
                    <input class="name-d-none" type="text" name="product" value="picles">
                        <input class="price-shop" type="text" name="price" value="100€">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/melon.jpg' alt="events with pumpkin sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">MELON</h3>
                    <p>Fall vibes</p>
                    <form>
                        
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-home-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/cucumber.jpg' alt="woman athletes sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">CUCUMBER</h3>
                    <p>The orange power</p>
                    <form>
                        <input class="name-d-none" type="text" name="product" value="pattypan">
                        <input class="price-shop" type="text" name="price" value="100€">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-home-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/courge.png' alt="woman athletes sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">SQUASH</h3>
                    <p>The orange power</p>
                    <form>
                        <input type="text" name="product" value="pattypan">
                        <input class="price-shop" type="text" name="price" value="100€">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include '../layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>