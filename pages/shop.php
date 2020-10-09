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
        <div>
            <button class="btn-cart1" href="cart.php" type="submit">CHECK YOUR BASKET</button>
        </div>
    </div>
    <section class="section-shop">
        <h2 class="title2-home">SHOP THE CUCURZY
            <hr>
        </h2>

        <div class="flex-container1-shop">
            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='products.php'>
                        <img src='../assets/images/products/pattypan-pic.jpg' alt="" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">PATTYPAN</h3>
                    <p>The cucurbit master</p>
                    <p>12€</p>
                    <form action="cart.php">
                        <input class="name-d-none" type="text" name="product" value="pattypan">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>
    

            <div class="flex-box-shop">
                <div class="flex-box-home-img">
                    <a href='products.php'>
                        <img src='../assets/images/products/pumpkin.jpg' alt="" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">PUMPKIN</h3>
                    <p>The orange power</p>
                    <p>9€</p>
                    <form action="cart.php">
                        <input class="name-d-none" type="text" name="product" value="pumpkin">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='products.php'>
                        <img src='../assets/images/products/watermelon.jpg.jpeg' alt="" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">WATERMELON</h3>
                    <p>Summer vibes</p>
                    <p>5€</p>
                    <form action="cart.php">
                    <input class="name-d-none" type="text" name="product" value="watermelon">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='products.php'>
                        <img src='../assets/images/products/butternut.jpg' alt="" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">BUTTERNUT</h3>
                    <p>Fall vibes</p>
                    <p>10€</p>
                    <form action="cart.php">
                    <input class="name-d-none" type="text" name="product" value="butternut">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='products.php'>
                        <img src='../assets/images/products/pickles.jpg' alt="" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">PICKLES</h3>
                    <p>The greens you need</p>
                    <p>3€</p>
                    <form action="cart.php">
                    <input class="name-d-none" type="text" name="product" value="pickles">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-shop-img">
                    <a href='athletes.php'>
                        <img src='../assets/images/products/melon.jpg' alt="" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">MELON</h3>
                    <p>Round, fruity and tasty</p>
                    <p>2€</p>
                    <form action="cart.php">
                    <input class="name-d-none" type="text" name="product" value="pattypan">
                    <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-home-img">
                    <a href='products.php'>
                        <img src='../assets/images/products/cucumber.jpg' alt="" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">CUCUMBER</h3>
                    <p>Fresh green juice</p>
                    <p>6€</p>
                    <form action="cart.php">
                        <input class="name-d-none" type="text" name="product" value="cucumber">
                        <button class="btn-cart"type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-shop">
                <div class="flex-box-home-img">
                    <a href='products.php'>
                        <img src='../assets/images/products/courge.png' alt="" />
                    </a>
                </div>
                <div class="box-text-shop">
                    <h3 class="title3-shop">SQUASH</h3>
                    <p>Yellow power</p>
                    <p>6€</p>
                    <form action="cart.php">
                        <input type="text" class="name-d-none" name="product" value="squash">
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