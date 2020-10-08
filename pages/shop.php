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
   <title>Products</title>
</head>
<body>
    <?php include '../layouts/header.php'; ?>
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
                    <h3 class="title3-shop">Pumpkin</h3>
                    <p>The orange power</p>
                    <form action="cart.php>
                        <input type="text" name="product" value="pattypan">
                        <input class="price-shop" type="text" name="price" value="100€">
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
                    <h3 class="title3-shop">Butternut</h3>
                    <p>Fall vibes</p>
                    <form>
                        <input type="text" name="product" value="butternut">
                        <button type="submit">Add to cart</button>
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
                    <h3 class="title3-shop">Butternut</h3>
                    <p>Fall vibes</p>
                    <form>
                        <input type="text" name="product" value="butternut">
                        <button type="submit">Add to cart</button>
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
                    <h3 class="title3-shop">Butternut</h3>
                    <p>Fall vibes</p>
                    <form>
                        <input type="text" name="product" value="butternut">
                        <button type="submit">Add to cart</button>
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
                    <h3 class="title3-shop">Butternut</h3>
                    <p>Fall vibes</p>
                    <form>
                        <input type="text" name="product" value="butternut">
                        <button type="submit">Add to cart</button>
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
                    <h3 class="title3-shop">Pumpkin</h3>
                    <p>The orange power</p>
                    <form action="cart.php>
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
                    <h3 class="title3-shop">Pumpkin</h3>
                    <p>The orange power</p>
                    <form action="cart.php>
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