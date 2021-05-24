<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PORTFOLIO 2021</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>

        <div class="d-flex" id="app">
            <div class="bg-primary" id="sidebar-container">
                <div class="logo">
                    <img src="{{ asset('img/logo.svg') }}" width="50%" height="50%" style="margin-left:20%">
                </div>
                <div class="menu">
                    <a href="#" class="d-block text-light font-weight-bold p-3 mb-1" id="opciones"><i class="fas fa-home"></i>
                        Inicio
                        <div style="float: right;" id="logoflecha">
                            <i class="fas fa-chevron-circle-right"></i>
                        </div>
                    </a>
                    <a href="#" class="d-block text-light font-weight-bold p-3 mb-1" id="opciones"><i class="fas fa-briefcase"></i>
                        Proyectos
                        <div style="float: right;" id="logoflecha">
                            <i class="fas fa-chevron-circle-right"></i>
                        </div>
                    </a>
                    <a href="#" class="d-block text-light font-weight-bold p-3 mb-1" id="opciones"><i class="fas fa-phone"></i>
                        Contacto
                        <div style="float: right;" id="logoflecha">
                            <i class="fas fa-chevron-circle-right"></i>
                        </div>
                    </a>
                    <a href="#" class="d-block text-light font-weight-bold p-3 mb-1" id="opciones"><i class="fas fa-cloud-download-alt"></i>
                        Descargar curriculum

                    </a>
                </div>

            </div>

            <div style="height:50%; width:100%">




                <ul class="nav justify-content-end bg-primary" >
                    <li class="nav-item" style="margin:1%">
                        <button type="button" class="btn btn-dark" onclick="cambiarModo()" id="modo"><i class="far fa-moon"></i> Modo Oscuro</button>
                    </li>
                    <li class="nav-item dropdown" style="margin:1%">
                        <button id="btnGroupDrop1" type="button" class="btn btn-light nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-globe"></i>Idiomas</button>
                        <div class="dropdown-menu mr-5" aria-labelledby="btnGroupDrop1" id="idiomas">
                            <a class="dropdown-item text-light font-weight-bold" href="#">Castellano</a>
                            <a class="dropdown-item text-light font-weight-bold" href="#">Catalán</a>
                            <a class="dropdown-item text-light font-weight-bold" href="#">Inglés</a>
                        </div>

                    </li>


                </ul>

                <div id="contenido">
                    <section>
                        <div class="container-fluid">


                            @yield('contenido')
                            <h2>Prueba</h2>



                        </div>

                    </section>
                </div>
            </div>




            {{-- <ul class="nav justify-content-end bg-primary" style="height:50%; width:100%">
                <li class="nav-item" style="margin:1%">
                    <button type="button" class="btn btn-dark" onclick="cambiarModo()" id="modo"><i class="far fa-moon"></i> Modo Oscuro</button>
                </li>
                <li class="nav-item dropdown" style="margin:1%">
                    <button id="btnGroupDrop1" type="button" class="btn btn-light nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe"></i>Idiomas</button>
                    <div class="dropdown-menu mr-5" aria-labelledby="btnGroupDrop1" id="idiomas">
                        <a class="dropdown-item text-light font-weight-bold" href="#">Castellano</a>
                        <a class="dropdown-item text-light font-weight-bold" href="#">Catalán</a>
                        <a class="dropdown-item text-light font-weight-bold" href="#">Inglés</a>
                    </div>

                </li>


            </ul> --}}





        </div>



    </body>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/efectosInfo.js') }}"></script>


    <script>

        function cambiarModo() {
            var cambiado = false;
            var cuerpoweb = document.body;
            var botonOsc = document.getElementById('modo');
            cuerpoweb.classList.toggle("oscuro");
            if(!cambiado){
                botonOsc.style.backgroundColor = "#555";
                botonOsc.style.color = "#ffffff";
            }else{
                botonOsc.style.backgroundColor = "#ffffff";
                botonOsc.style.color = "#000000";
                cambiado = true;
            }


        }
    </script>
</html>
