<?php
    session_start();
    include 'inc/head.inc.php';
?>
<!--Header-->
<header>
    <div class='container-fluid'>
        <div class='jumbotron text-center'>
            <h1>Shawpify</h1>
            <?php
                if(isset($_SESSION['username'])){
                    echo '<p>Welcome back, '.$_SESSION['username'].'!</p>';
                }
                else {
                    echo '<p>Offering a wide range of products from consumer electronics to cars</p>';
                }
            ?>
        </div>
    </div>
</header>

<!--Main Content-->
<main>
    <div class='container'>
        <div class='row'>
            <div class='col-md-3'>
                <p class='lead'>Product Range</p>
                <p>Computers</p>
                <div class='list-group'>
                    <a href='#' class='list-group-item'>Category 1</a>
                    <a href='#' class='list-group-item'>Category 2</a>
                    <a href='#' class='list-group-item'>Category 3</a>
                </div>
                <p>Cars</p>
                <div class='list-group'>
                    <a href='#' class='list-group-item'>Category 4</a>
                    <a href='#' class='list-group-item'>Category 5</a>
                    <a href='#' class='list-group-item'>Category 6</a>
                </div>
            </div>
            <div class='col-md-9'>
                <div class='row carousel-holder'>
                    <div class='col-md-12'>
                        <div id='carousel-example-generic' class='carousel-slide' data-ride='carousel'>
                            <ol class='carousel-indicators'>
                                <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
                                <li data-target='#carousel-example-generic' data-slide-to='1' class='active'></li>
                                <li data-target='#carousel-example-generic' data-slide-to='2' class='active'></li>
                            </ol>
                            <div class='carousel-inner'>
                                <div class='item active'>
                                    <img class='slide-image' src='img/car1.jpg' alt='Car 1'>
                                </div>
                                <div class='item'>
                                    <img class='slide-image' src='img/car2.jpg' alt='Car 2'>
                                </div>
                                <div class='item'>
                                    <img class='slide-image' src='img/car3.jpg' alt='Car 3'>
                                </div>
                            </div>
                            <a class='left carousel-control' href='#carousel-example-generic'
                               data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span> </a>
                            <a class='right carousel-control' href='#carousel-example-generic'
                               data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span> </a>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-4'>
                        <div class='thumbnail'>
                            <img src='http://placehold.it/320x150' alt='Thumbnail Image'>
                            <div class='caption'>
                                <h4 class='pull-right'>$35,000</h4>
                                <h4><a href='#'>Product 1</a></h4>
                                <p>Frondator velums, tanquam teres resistentia. Seculas crescere, tanquam placidus nixus.</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>15 reviews</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='thumbnail'>
                            <img src='http://placehold.it/320x150' alt='Thumbnail Image'>
                            <div class='caption'>
                                <h4 class='pull-right'>$63,000</h4>
                                <h4><a href='#'>Product 2</a></h4>
                                <p>Frondator velums, tanquam teres resistentia. Seculas crescere, tanquam placidus nixus.</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>67 reviews</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='thumbnail'>
                            <img src='http://placehold.it/320x150' alt='Thumbnail Image'>
                            <div class='caption'>
                                <h4 class='pull-right'>$84,000</h4>
                                <h4><a href='#'>Product 3</a></h4>
                                <p>Frondator velums, tanquam teres resistentia. Seculas crescere, tanquam placidus nixus.</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>8 reviews</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-4'>
                        <div class='thumbnail'>
                            <img src='http://placehold.it/320x150' alt='Thumbnail Image'>
                            <div class='caption'>
                                <h4 class='pull-right'>$5,000</h4>
                                <h4><a href='#'>Product 4</a></h4>
                                <p>Frondator velums, tanquam teres resistentia. Seculas crescere, tanquam placidus nixus.</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>37 reviews</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='thumbnail'>
                            <img src='http://placehold.it/320x150' alt='Thumbnail Image'>
                            <div class='caption'>
                                <h4 class='pull-right'>$13,000</h4>
                                <h4><a href='#'>Product 5</a></h4>
                                <p>Frondator velums, tanquam teres resistentia. Seculas crescere, tanquam placidus nixus.</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>107 reviews</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='thumbnail'>
                            <img src='http://placehold.it/320x150' alt='Thumbnail Image'>
                            <div class='caption'>
                                <h4 class='pull-right'>$182,000</h4>
                                <h4><a href='#'>Product 6</a></h4>
                                <p>Frondator velums, tanquam teres resistentia. Seculas crescere, tanquam placidus nixus.</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>98 reviews</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='text-center'>
                    <nav aria-label='Page navigation'>
                        <ul class='pagination'>
                            <li>
                                <a href='#' aria-label='Previous'>
                                    <span aria-hidden='true'>&laquo;</span>
                                </a>
                            </li>
                            <li><a href='#'>1</a></li>
                            <li><a href='#'>2</a></li>
                            <li><a href='#'>3</a></li>
                            <li><a href='#'>4</a></li>
                            <li><a href='#'>5</a></li>
                            <li>
                                <a href='#' aria-label='Next'>
                                    <span aria-hidden='true'>&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>
<!--Footer Area-->
<?php
    include 'inc/foot.inc.php';
?>
