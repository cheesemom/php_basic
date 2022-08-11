<? include 'head.sub.php';?>

<main class="Main">
    <section class="MainVisual">
        <div class="MainSlider">
            <figure class="itm01"></figure>
            <figure class="itm02"></figure>
            <figure class="itm01"></figure>
            <figure class="itm02"></figure>
        </div>
        <div class="slogan">
            <h2><? $c_slogan ?></h2>
            <p><? $e_slogan ?></p>
        </div>
    </section>

    <section class="Customer">
        <ul class="container">
            <li>
                <div class="list">
                    <h3>news &amp notice <small><a href="">more<i class="xi-arrow-right"></i></a></small></h3>
                    <ul>
                        <li><a href="">가나다라마바사 ... <span>2022.08.11</span></a></li>
                        <li><a href="">가나다라마바사 ... <span>2022.08.11</span></a></li>
                        <li><a href="">가나다라마바사 ... <span>2022.08.11</span></a></li>
                        <li><a href="">가나다라마바사 ... <span>2022.08.11</span></a></li>
                        <li><a href="">가나다라마바사 ... <span>2022.08.11</span></a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="slider">
                    <div class="ProductSlider">
                        <figure>
                            <img src="./img/product01.jpg" alt="">
                        </figure>
                        <figure>
                            <img src="./img/product02.jpg" alt="">
                        </figure>
                        <figure>
                            <img src="./img/product03.jpg" alt="">
                        </figure>
                    </div>

                    <div class="product_arrows">
                        <i class="xi-arrows-left"></i>
                        <i class="xi-arrows-right"></i>
                    </div>
                </div>
            </li>

            <li>
            <? include 'customer.php'?>
            </li>
        </ul>
    </section>
</main>

<? include 'tail.sub.php';?>