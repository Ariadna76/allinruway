@extends('layouts.app')

@section('content')

<section class="container-fluid py-4">

    <div class="row">

        <!-- PANEL IZQUIERDO (Se añadió text-white para hacer todas las letras blancas) -->
        <div class="col-lg-5 text-white">

            <!-- Cambiado text-dark por text-white -->
            <a href="/" class="text-decoration-none text-white fs-3 fw-bold">
                ← Volver
            </a>

            <div class="mt-4">

                <h1 class="fw-bold display-5 text-uppercase">
                    CREA TU CUENTA COMO TRABAJADOR
                </h1>

                <p class="fs-3">
                    Completa tus datos para comenzar a recibir trabajos
                    y hacer crecer tu negocio.
                </p>

            </div>

            <!-- IMAGEN -->

            <div class="text-center my-4">

                <img src="{{ asset('img/trabajador.png') }}"
                     class="img-fluid"
                     style="max-height:350px;">

            </div>

            <!-- BENEFICIOS -->

            <div class="row mt-4 text-center">

                <div class="col-md-4">

                    <div class="p-3">

                        <div class="fs-1 mb-2">🛡️</div>

                        <p>
                            Conecta con clientes
                            verificados
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="p-3">

                        <div class="fs-1 mb-2">⭐</div>

                        <p>
                            Accede a más
                            trabajos de tu zona
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="p-3">

                        <div class="fs-1 mb-2">📈</div>

                        <p>
                            Gestiona tus trabajos
                            y ganancias fácilmente
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- PANEL DERECHO (Mantiene sus colores oscuros originales para que sea legible sobre el fondo blanco del formulario) -->

        <div class="col-lg-7">

            <div class="card shadow-lg border-danger rounded-4">

                <div class="card-body p-5">

                    <!-- PASOS -->

                    <div class="d-flex justify-content-center align-items-center mb-5">

                        <div class="text-center mx-3">

                            <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">
                                <strong>1</strong>
                            </div>

                            <small class="fw-bold text-danger">
                                Datos personales
                            </small>

                        </div>

                        <div class="mx-2">────────</div>

                        <div class="text-center mx-3">

                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">
                                <strong>2</strong>
                            </div>

                            <small>Servicios</small>

                        </div>

                        <div class="mx-2">────────</div>

                        <div class="text-center mx-3">

                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">
                                <strong>3</strong>
                            </div>

                            <small>Verificación</small>

                        </div>

                        <div class="mx-2">────────</div>

                        <div class="text-center mx-3">

                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">
                                <strong>4</strong>
                            </div>

                            <small>¡Listo!</small>

                        </div>

                    </div>

                    <!-- FORMULARIO -->

                    <h2 class="fw-bold mb-4">
                        Datos personales
                    </h2>

                    <form>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label>Nombre completo</label>

                                <input type="text"
                                       class="form-control"
                                       placeholder="Ej. Gonzalito">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Número de documento</label>

                                <input type="text"
                                       class="form-control"
                                       placeholder="Ej. 12345678">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Correo electrónico</label>

                                <input type="email"
                                       class="form-control"
                                       placeholder="Ej. correo@gmail.com">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Número de celular</label>

                                <input type="text"
                                       class="form-control"
                                       placeholder="999 999 999">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Contraseña</label>

                                <input type="password"
                                       class="form-control"
                                       placeholder="Crea una contraseña segura">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Confirmar contraseña</label>

                                <input type="password"
                                       class="form-control"
                                       placeholder="Confirma tu contraseña">

                            </div>

                            <div class="col-12 mb-3">

                                <label>Ubicación</label>

                                <input type="text"
                                       class="form-control"
                                       placeholder="Ej. Cusco, Perú">

                            </div>

                        </div>

                        <button class="btn btn-danger px-5 py-3 mt-3">
                            Continuar
                        </button>

                    </form>

                </div>

            </div>

            <!-- MENSAJE -->

            <div class="card mt-4 border-warning">

                <div class="card-body">

                    <h3 class="fw-bold">
                        🎁 ¡Bienvenido a Allin Ruway!
                    </h3>

                    <p class="mb-0">
                        Por ser nuevo trabajador, obtienes una suscripción
                        <strong>GRATIS por 2 años</strong> en nuestra plataforma.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection