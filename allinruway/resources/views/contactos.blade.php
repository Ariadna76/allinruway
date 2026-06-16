@extends('layouts.app')

@section('content')

<section class="container-fluid py-4" style="background-color: #FFFFFF;">

    <div class="row">

        <div class="col-lg-5 text-dark">

            <a href="/" class="text-decoration-none text-dark fs-3 fw-bold" style="transition: 0.2s;" onmouseover="this.style.color='#D13441'" onmouseout="this.style.color='#212529'">
                ← Volver
            </a>

            <div class="mt-4">
                <h1 class="fw-bold display-5 text-uppercase" style="color: #111827;">
                    CREA TU CUENTA COMO TRABAJADOR
                </h1>
                <p class="fs-4 text-muted">
                    Completa tus datos para comenzar a recibir trabajos y hacer crecer tu negocio en Cusco.
                </p>
            </div>

            <div class="text-center my-4">
                <img src="{{ asset('img/trabajador.png') }}" class="img-fluid" style="max-height:300px;">
            </div>

            <div class="row mt-4 text-center">
                <div class="col-md-4">
                    <div class="p-2">
                        <div class="fs-1 mb-2">🛡️</div>
                        <p class="small fw-semibold text-secondary">Conecta con clientes verificados</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-2">
                        <div class="fs-1 mb-2">⭐</div>
                        <p class="small fw-semibold text-secondary">Accede a más trabajos de tu zona</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-2">
                        <div class="fs-1 mb-2">📈</div>
                        <p class="small fw-semibold text-secondary">Gestiona tus ganancias fácilmente</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-7">

            <div class="card shadow-lg border-light rounded-4" style="border-top: 4px solid #D13441 !important;">

                <div class="card-body p-5">

                    <div class="d-flex justify-content-center align-items-center mb-5 flex-wrap">

                        <div class="text-center mx-2 my-1">
                            <div id="indicador-1" class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center fw-bold shadow-sm" style="width:50px;height:50px; transition: 0.3s;">
                                1
                            </div>
                            <small id="texto-ind-1" class="fw-bold text-danger d-block mt-1">Datos</small>
                        </div>

                        <div class="text-muted opacity-25 d-none d-sm-block">────</div>

                        <div class="text-center mx-2 my-1">
                            <div id="indicador-2" class="bg-light text-secondary rounded-circle d-flex align-items-center justify-content-center fw-bold border" style="width:50px;height:50px; transition: 0.3s;">
                                2
                            </div>
                            <small id="texto-ind-2" class="text-muted d-block mt-1">Servicios</small>
                        </div>

                        <div class="text-muted opacity-25 d-none d-sm-block">────</div>

                        <div class="text-center mx-2 my-1">
                            <div id="indicador-3" class="bg-light text-secondary rounded-circle d-flex align-items-center justify-content-center fw-bold border" style="width:50px;height:50px; transition: 0.3s;">
                                3
                            </div>
                            <small id="texto-ind-3" class="text-muted d-block mt-1">Validación</small>
                        </div>

                        <div class="text-muted opacity-25 d-none d-sm-block">────</div>

                        <div class="text-center mx-2 my-1">
                            <div id="indicador-4" class="bg-light text-secondary rounded-circle d-flex align-items-center justify-content-center fw-bold border" style="width:50px;height:50px; transition: 0.3s;">
                                4
                            </div>
                            <small id="texto-ind-4" class="text-muted d-block mt-1">¡Listo!</small>
                        </div>

                    </div>

                    <form id="multi-step-form" method="POST" action="/register">
                        @csrf

                        <div class="form-step" id="step-wrapper-1">
                            <h2 class="fw-bold mb-4" style="color: #111827;">Datos personales</h2>
                            <div class="row">
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label fw-semibold text-secondary">Nombre completo</label>
                                    <input type="text" name="nombre" class="form-control py-2.5" placeholder="Ej. Gonzalito" required>
                                </div>
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label fw-semibold text-secondary">Número de documento</label>
                                    <input type="text" name="dni" class="form-control py-2.5" placeholder="Ej. 12345678" required>
                                </div>
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label fw-semibold text-secondary">Correo electrónico</label>
                                    <input type="email" name="correo" class="form-control py-2.5" placeholder="Ej. correo@gmail.com" required>
                                </div>
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label fw-semibold text-secondary">Número de celular</label>
                                    <input type="text" name="celular" class="form-control py-2.5" placeholder="999 999 999" required>
                                </div>
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label fw-semibold text-secondary">Contraseña</label>
                                    <input type="password" name="password" class="form-control py-2.5" placeholder="Crea una contraseña" required>
                                </div>
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label fw-semibold text-secondary">Confirmar contraseña</label>
                                    <input type="password" class="form-control py-2.5" placeholder="Confirma tu contraseña" required>
                                </div>
                                <div class="col-12 mb-4 text-start">
                                    <label class="form-label fw-semibold text-secondary">Ubicación</label>
                                    <input type="text" name="ubicacion" class="form-control py-2.5" placeholder="Ej. Cusco, Perú" required>
                                </div>
                            </div>
                            <div class="text-start">
                                <button type="button" class="btn text-white px-5 py-2.5 fw-bold" style="background-color: #D13441; border-radius: 8px;" onclick="changeStep(2)">
                                    Continuar →
                                </button>
                            </div>
                        </div>

                        <div class="form-step d-none" id="step-wrapper-2">
                            <h2 class="fw-bold mb-4" style="color: #111827;">Especialidad y Oficios</h2>
                            <p class="text-muted mb-4">Selecciona tu categoría de trabajo principal para que los clientes locales te encuentren.</p>
                            
                            <div class="mb-4 text-start">
                                <label class="form-label fw-semibold text-secondary">Categoría Técnica</label>
                                <select name="oficio" class="form-select py-2.5">
                                    <option value="Carpintero">Carpintería</option>
                                    <option value="Electricista">Electricidad</option>
                                    <option value="Gasfiteria">Gasfitería</option>
                                    <option value="Albanil">Albañilería y Construcción</option>
                                </select>
                            </div>

                            <div class="mb-4 text-start">
                                <label class="form-label fw-semibold text-secondary">Breve descripción de tus habilidades</label>
                                <textarea name="descripcion" class="form-control" rows="3" placeholder="Ej. Especialista en reparación de tuberías de alta presión y mantenimiento del hogar..."></textarea>
                            </div>

                            <div class="d-flex gap-3">
                                <button type="button" class="btn border-secondary text-secondary px-4 py-2.5 fw-bold" style="border-radius: 8px;" onclick="changeStep(1)">
                                    ← Atrás
                                </button>
                                <button type="button" class="btn text-white px-5 py-2.5 fw-bold" style="background-color: #D13441; border-radius: 8px;" onclick="changeStep(4)">
                                    Continuar →
                                </button>
                            </div>
                        </div>

                        <div class="form-step d-none" id="step-wrapper-3">
                            </div>

                        <div class="form-step d-none" id="step-wrapper-4">
                            <div class="text-center py-4">
                                <div class="display-1 mb-3 text-success">🎉</div>
                                <h2 class="fw-bold mb-2" style="color: #111827;">¡Registro Listo para Guardar!</h2>
                                <p class="text-muted mb-4 mx-auto" style="max-width: 450px;">
                                    Presiona el botón de abajo para almacenar tu información en el sistema y quedar disponible en las búsquedas en Cusco.
                                </p>
                                <button type="submit" class="btn text-white px-5 py-3 fw-bold shadow-sm" style="background-color: #D13441; border-radius: 8px; font-size: 16px;">
                                    Guardar Registro y Ver Panel
                                </button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

            <div class="card mt-4 border-light shadow-sm" style="background-color: #FFFDF9; border-left: 4px solid #FFC107 !important;">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-dark mb-1">
                        🎁 ¡Beneficio Exclusivo Activado!
                    </h5>
                    <p class="mb-0 text-secondary small">
                        Por lanzar tu cuenta hoy en Cusco, se te otorga una suscripción <strong>COMPLETAMENTE GRATIS por 2 años</strong> para recibir alertas laborales ilimitadas.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<script>
function changeStep(targetStep) {
    document.querySelectorAll('.form-step').forEach(step => {
        step.classList.add('d-none');
    });

    document.getElementById(`step-wrapper-${targetStep}`).classList.remove('d-none');

    for (let i = 1; i <= 4; i++) {
        const indicador = document.getElementById(`indicador-${i}`);
        const texto = document.getElementById(`texto-ind-${i}`);

        if (indicador && texto) {
            if (i <= targetStep) {
                indicador.classList.remove('bg-light', 'text-secondary', 'border');
                indicador.classList.add('bg-danger', 'text-white', 'shadow-sm');
                texto.classList.add('fw-bold', 'text-danger');
                texto.classList.remove('text-muted');
            } else {
                indicador.classList.add('bg-light', 'text-secondary', 'border');
                indicador.classList.remove('bg-danger', 'text-white', 'shadow-sm');
                texto.classList.remove('fw-bold', 'text-danger');
                texto.classList.add('text-muted');
            }
        }
    }
    
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>

@endsection