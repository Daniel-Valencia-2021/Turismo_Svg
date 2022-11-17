<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('static/images/ICONO.png') }}">

    @extends('layouts.head')
</head>

<body>

    @extends('layouts.nav')



    <div class="hero-wrap js-fullheight" style="background-image: url('static/img/guajira/guajira.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Welcome to SysTurism </span>
                    <h1 class="mb-4">La Guajira</h1>
                    <p class="caps">Descubre tu lugar favorito</p>
                </div>
                <a href="https://www.youtube.com/watch?v=W-u-6o1FCso"
                    class="icon-video popup- nvimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Welcome to Systurism</span>
                        <h2 class="mb-4">Es tiempo de iniciar tu aventura</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rerum perferendis facere sequi
                            pariatur minima, quis fugit magni odio provident quidem tenetur illo laboriosam nesciunt?
                            Nam dignissimos et expedita cupiditate!</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-1 d-block img"
                                style="background-image: url('static/images/services-1.jpg');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-paragliding"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Lorem</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantiu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-2 d-block img"
                                style="background-image: url('static/images/services-2.jpg');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-route"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Lorem</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantiu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-3 d-block img"
                                style="background-image: url('static/images/services-3.jpg');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-tour-guide"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Lorem</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantiu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-4 d-block img"
                                style="background-image: url('static/images/services-4.jpg');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-map"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Lorem</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantiu
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img ftco-select-destination" style="background-image: url('static/images/bg_3.jpg');">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Destinos</h2>
                </div>
            </div>
        </div>
        <div class="container container-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-destination owl-carousel ftco-animate">
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img"
                                    style="background-image: url('static/lugares/SS2.jpg');">
                                    <div class="text">
                                        <h3>San Andres isla</h3>
                                        <span>8 Tours por la isla</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img"
                                    style="background-image: url('static/lugares/Desierto\ Tatacoa.png')">
                                    <div class="text">
                                        <h3>Desierto de la Tatacoa - Huila</h3>
                                        <span>2 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img"
                                    style="background-image: url('static/lugares/punta\ g.png')">
                                    <div class="text">
                                        <h3>Punta Gallinas - La Guajira</h3>
                                        <span>5 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img"
                                    style="background-image: url('static/lugares/CañoC.png');">
                                    <div class="text">
                                        <h3>Caño Cristales - Meta</h3>
                                        <span>5 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img"
                                    style="background-image: url('static/lugares/Sal.jpg');">
                                    <div class="text">
                                        <h3>Mina de sal - Cundinamarca</h3>
                                        <span>7 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Destination</span>
                    <h2 class="mb-4">Destinos Tours</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url('static/lugares/Puerto\ Nari.png');">
                            <span class="price">$550,000 x persona </span>
                        </a>
                        <div class="text p-4">
                            <span class="days">8 Dias y 7 Noches</span>
                            <h3><a href="#">Puerto Nariño </a></h3>
                            <p class="location"><span class="fa fa-map-marker"></span> Amazonas</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/destination-2.jpg);">
                            <span class="price">$550/person</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">10 Days Tour</span>
                            <h3><a href="#">Banaue Rice Terraces</a></h3>
                            <p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url('static/images/destination-3.jpg');">
                            <span class="price">$550/person</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">7 Days Tour</span>
                            <h3><a href="#">Banaue Rice Terraces</a></h3>
                            <p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url('static/images/destination-4.jpg');">
                            <span class="price">$550/person</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Banaue Rice Terraces</a></h3>
                            <p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url('static/images/destination-5.jpg');">
                            <span class="price">$550/person</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">10 Days Tour</span>
                            <h3><a href="#">Banaue Rice Terraces</a></h3>
                            <p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url('static/images/destination-6.jpg');">
                            <span class="price">$550/person</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">7 Days Tour</span>
                            <h3><a href="#">Banaue Rice Terraces</a></h3>
                            <p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about img"style="background-image: url('static/images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                    <a href="https://www.youtube.com/watch?v=W-u-6o1FCso"
                        class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center"
                                style="background-image:url('static/images/about-1.jpg');">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Nosotros</span>
                                    <h2 class="mb-4">Colombia es un pais asombroso, nostros nos encargamos de
                                        demostrar lo asombroso que es en nuestro software</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-bottom"
        style="background-image: url('static/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Seccion</span>
                    <h2 class="mb-4">Testimonios de Turistas</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">

                        <!-- Aca comienza un comentario -->

                        @foreach ($comentarios as $comentario)
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="star">
                                            Puntaje:
                                            @for ($i = 1; $i <= $comentario->estrellas; $i++)
                                                <span class="fa fa-star"></span>
                                            @endfor

                                        </p>
                                        <p class="mb-4">{{ $comentario->comentario }}</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url('static/images/avatar1.jpg')"></div>
                                            <div class="pl-3">
                                                <p class="name">{{ $comentario->nombre }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Hasta aca va un comentario -->
                    </div>
                    <center>
                        <p class="mb-0"><a href="{{ route('comentario') }}" class="btn btn-primary px-4 py-3">Deja
                                tu
                                comentario</a></p>
                    </center>

                </div>

            </div>

        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Blogs </span>
                    <h2 class="mb-4">Ofertas recientes</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('static/images/image_1.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">19</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2022</span>
                                    <span class="mos">Diciembre</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Excursion por pereira</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('static/images/image_2.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">16</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2022</span>
                                    <span class="mos">Septiembre</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Tours por Acandi, Trigana, Cartagena</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('static/images/image_3.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">28</span>
                                </div>
                                <div class="two">
                                    <br>
                                    <span class="yr">2023</span>
                                    <span class="mos">Septiembre</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Explorar con Cartagena</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->

    @extends('layouts.footer')

    <!--Footer fin-->



</body>

</html>
