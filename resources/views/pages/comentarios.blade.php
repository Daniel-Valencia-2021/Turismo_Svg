<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('static/images/ICONO.png') }}">

    @extends('layouts.head')
</head>

<body>
    @extends('layouts.nav')
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('static/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread">Deja tu comentario sobre este sitio aca por favor</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb contact-section mb-4">
    </section>

    <section class="ftco-section contact-section ftco-no-pt">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">

                    <form action="{{route('comentariosform')}}" method="POST" class="bg-light p-5 contact-form">

                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="number" max="5" min="1" class="form-control" placeholder="Cuantas estrellas" name="estrellas" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Correo" name="correo" required>
                        </div>
                        <div class="form-group">
                            <textarea name="mensaje" id="" cols="30" rows="7" class="form-control" placeholder="Dejanos tu mensaje por favor" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar comentario" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    @if (session('info'))
<script>
    alert("{{session('info')}}");
</script>

    @endif

    <!--Footer-->

    @extends('layouts.footer')

    <!--Footer fin-->

</body>

</html>
