@extends('layouts.app')

@section('content')
<div class="container py-5" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; background-color: #FFFFFF;">
    <div class="row justify-content-center text-center w-100">
        <div class="col-lg-10">
            
            <h2 class="fw-bold mb-3" style="color: #111827; font-size: 36px; font-family: 'Poppins', sans-serif;">
                ¿Cómo deseas usar <span style="color: #D13441;">Allin Ruway</span> hoy?
            </h2>
            <p class="mb-5 mx-auto" style="max-width: 600px; color: #4B5563; font-size: 16px;">
                Conectando el talento de los trabajadores independientes con las necesidades de los hogares en Cusco.
            </p>

            <div class="row g-4 justify-content-center">
                
                <div class="col-md-5">
                    <div class="text-center d-flex flex-column justify-content-between p-4" 
                         style="background: #FDFBF7; border: 1px solid #E5E7EB; border-radius: 16px; min-height: 300px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); transition: 0.3s;"
                         onmouseover="this.style.borderColor='#D13441'; this.style.transform='translateY(-4px)'" 
                         onmouseout="this.style.borderColor='#E5E7EB'; this.style.transform='translateY(0)'">
                        <div>
                            <div class="mb-3 d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px; background-color: #FEE2E2; border-radius: 50%; font-size: 28px; color: #D13441;">
                                🔍
                            </div>
                            <h4 class="fw-bold mb-2" style="color: #111827; font-size: 22px;">Busco un Trabajador</h4>
                            <p style="font-size: 14px; color: #4B5563; line-height: 1.5;">
                                Explora perfiles de expertos en Cusco. Encuentra soluciones rápidas para tu hogar sin necesidad de registro previo.
                            </p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('cliente.buscar') }}" class="btn btn-outline-danger px-4 py-2 fw-bold">
                                Ingresar como Cliente
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="text-center d-flex flex-column justify-content-between p-4" 
                         style="background: #FDFBF7; border: 1px solid #E5E7EB; border-radius: 16px; min-height: 300px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); transition: 0.3s;"
                         onmouseover="this.style.borderColor='#D13441'; this.style.transform='translateY(-4px)'" 
                         onmouseout="this.style.borderColor='#E5E7EB'; this.style.transform='translateY(0)'">
                        <div>
                            <div class="mb-3 d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px; background-color: #FEE2E2; border-radius: 50%; font-size: 28px; color: #D13441;">
                                💼
                            </div>
                            <h4 class="fw-bold mb-2" style="color: #111827; font-size: 22px;">Soy Trabajador</h4>
                            <p style="font-size: 14px; color: #4B5563; line-height: 1.5;">
                                Regístrate, crea tu perfil, publica tus habilidades técnicas y conecta directamente con cientos de clientes locales.
                            </p>
                        </div>
                        <div class="mt-3">
                            <a href="/contactos" class="btn fw-bold d-block py-2.5" style="background-color: transparent; color: #D13441; border: 2px solid #D13441; border-radius: 8px; font-size: 15px; text-decoration: none; transition: 0.2s;" onmouseover="this.style.backgroundColor='#D13441'; this.style.color='#FFFFFF'" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#D13441'">
                                Registrarme como Trabajador
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection