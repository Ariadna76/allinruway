@extends('layouts.app')

@section('content')

<section class="container py-5">

    <div class="row align-items-center">

        <!-- IMAGEN -->

        <div class="col-lg-6 mb-5 text-center">

            <img src="{{ asset('img/nosotros-allin.png') }}"
                 class="img-fluid rounded-5 shadow-lg"
                 alt="Allin Ruway">

        </div>

        <!-- CONTENIDO -->

        <div class="col-lg-6">

            <h5 class="text-warning fw-bold mb-3">
                SOBRE ALLIN RUWAY
            </h5>

            <h1 class="text-white fw-bold display-4 mb-4">
                Conectamos personas con profesionales de confianza
            </h1>

            <p class="text-light fs-5 mb-4">

                Allin Ruway es una plataforma digital que facilita la conexión
                entre clientes y trabajadores independientes especializados en
                diferentes servicios para el hogar, mantenimiento, reparaciones,
                construcción, limpieza y mucho más.

            </p>

            <p class="text-light mb-4">

                Nuestro objetivo es brindar una experiencia segura, rápida y
                confiable para que los usuarios encuentren profesionales
                verificados cerca de su ubicación y los trabajadores puedan
                acceder a nuevas oportunidades laborales.

            </p>

            <!-- MISION Y VISION -->

            <div class="row g-4 mt-3">

                <div class="col-md-6">

                    <div class="card border-0 h-100 shadow-lg p-4"
                         style="
                         background: rgba(255,255,255,0.08);
                         backdrop-filter: blur(10px);
                         border-radius:25px;
                         ">

                        <h4 class="text-warning fw-bold mb-3">
                            🎯 Misión
                        </h4>

                        <p class="text-light">

                            Facilitar el acceso a servicios confiables,
                            conectando clientes con trabajadores calificados
                            mediante una plataforma tecnológica moderna.

                        </p>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-0 h-100 shadow-lg p-4"
                         style="
                         background: rgba(255,255,255,0.08);
                         backdrop-filter: blur(10px);
                         border-radius:25px;
                         ">

                        <h4 class="text-warning fw-bold mb-3">
                            🚀 Visión
                        </h4>

                        <p class="text-light">

                            Convertirnos en la plataforma líder de servicios
                            del Perú, generando oportunidades laborales y
                            confianza para miles de usuarios.

                        </p>

                    </div>

                </div>

            </div>

            <!-- VALORES -->

            <div class="row g-4 mt-2">

                <div class="col-md-4">

                    <div class="text-center text-light">

                        <h2>🤝</h2>
                        <h5>Confianza</h5>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="text-center text-light">

                        <h2>🛡️</h2>
                        <h5>Seguridad</h5>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="text-center text-light">

                        <h2>⭐</h2>
                        <h5>Calidad</h5>

                    </div>

                </div>

            </div>

            <!-- BOTÓN -->

            <a href="/contactos"
               class="btn btn-warning px-5 py-3 rounded-pill fw-bold mt-5">

               ÚNETE A ALLIN RUWAY

            </a>

        </div>

    </div>

</section>

@endsection