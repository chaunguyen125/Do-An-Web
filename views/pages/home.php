<?php
require_once './views/includes/header.php';
?>

<main>
    <div class="container container-lg container-md container-sm mt-4">
        <div class="slide">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="../../assets/img/tungnoti.jpg" class="d-block" style="height: 700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="../../assets/img/avatar.jpg" class="d-block" style="height: 700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../assets/img/thaimap.jpg" class="d-block" style="height: 700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row row-cols-lg-6 row-cols-md-4 playlist-list">
            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

            <div class="col mt-4 playlist-item">
                <a class="playlist-item__link" href="#">
                    <img class="playlist-item__img" src="../../assets/img/avatar.jpg" alt="">
                </a>
                <a class="text-light text-decoration-none mt-2 d-block playlist-item__description playlist-item__text-link" href="#">
                    Tên phim-mô tả
                </a>
            </div>

        </div>
    </div>
</main>

<?php

require_once './views/includes/footer.php';
?>