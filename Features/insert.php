<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Website-design.css">
    <script src="behavior.js"></script>
    <title></title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-right">
                <ul class="nav-left">
                    <li class="logo">Sari Sari<br> Store</li>
                    <li>
                        <div class="search-box">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </li>
                    <li><button class="category">Category</button></li>
                    <li>Add to cart</li>
                    <li>|My account|</li>
                    <li>|Log out|</li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <ul class="main-nav">
            <li>Home|</li>
            <li>
                <details>
                    <summary>Shop|</summary>
                </details>
            </li>
            <li>New Arrivals|</li>
            <li>All Products|</li>
            <li>Categories|</li>
            <li>Limited Edition|</li>
        </ul>
        <aside id="cart-items"></aside>
        <section>
            <article>
                <form action="Home.php" method="POST" enctype="multipart/form-data">
                    <div class="products">
                        <figure>
                            <input type="file" name="image">
                            <img src="C:\xampp\htdocs\database\Features\images\magicsarap.webp">
                            <figcaption>
                                <input type="text" name="name" placeholder="name">Sarap
                            </figcaption>
                            <div id="counter">
                                <button id="decrease-button">-</button>
                                <span id="counter">0</span>
                                <button id="increase-button">+</button><br>
                                <button id="add-to-cart">Add to Cart</button>
                            </div>
                        </figure>
                    </div>
                </form>
            </article>
        </section>
    </main>
</body>
</html>
