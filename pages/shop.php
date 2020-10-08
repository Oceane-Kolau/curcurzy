<?php
session_start();
require '../functions.php';

if(!empty($_GET)){
    $product = $_GET['product'];
    addArticle($product);
};
var_dump($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php //include '../layouts/head.php' ?>
   <title>Products</title>
</head>
<body>
    <?php include '../layouts/header.php'; ?>
    <section class="section2-home">
        <h2 class="title2-home">THE CUCURZY WORLD
            <hr>
        </h2>
        <div class="flex-container2-home">
            <div class="flex-box-home">
                <div class="flex-box-home-img">
                    <a href='products.php'>
                        <img src='assets/images/products/cucumber.jpg' alt="biologic cucumber powered by cucurzy" />
                    </a>
                </div>
                <div class="flex-box-home">
                <div class="flex-box-home-img">
                    <a href='athletes.php'>
                        <img src='assets/images/athletes/antonia-lakrazy.jpg' alt="woman athletes sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-home">
                    <h3 class="title3-home">PATTYPAN</h3>
                    <p>Produit 1</p>
                    <form>
                        <input type="text" name="product" value="pattypan">
                        <input type="text" name="price" value="100">
                        <button type="submit">Add to cart</button>
                    </form>
                </div>
            </div>
                <div class="box-text-home">
                    <h3 class="title3-home">CUCUMBER</h3>
                    <p>Produit 2</p>
                    <h4 class="title4-home">Products</h4>
                    <form>
                        <input type="text" name="product" value="concombre">
                        <button type="submit">Add to cart</button>
                    </form>
                    
                </div>
            </div>
            <div class="flex-box-home">
                <div class="flex-box-home-img">
                    <a href='athletes.php'>
                        <img src='assets/images/athletes/antonia-lakrazy.jpg' alt="woman athletes sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-home">
                    <h3 class="title3-home">Pumpkin</h3>
                    <p>Produit 2</p>
                    <form>
                        <input type="text" name="product" value="pumpkin">
                        <button type="submit">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="flex-box-home">
                <div class="flex-box-home-img">
                    <a href='athletes.php'>
                        <img src='assets/images/products/pumpkin.jpg' alt="events with pumpkin sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-home">
                    <h3 class="title3-home">Butternut</h3>
                    <p>Produit 1</p>
                    <form>
                        <input type="text" name="product" value="butternut">
                        <button type="submit">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include '../layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>