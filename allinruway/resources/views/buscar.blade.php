<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Trabajadores - Allin Ruway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .category-btn.active { background-color: #D13441 !important; color: white !important; border: none !important; }
        .category-btn.active .badge { bg-white !important; color: #D13441 !important; }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-white bg-white shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="/">🛠️ Allin Ruway</a>
            <a href="/" class="btn btn-sm btn-outline-secondary">Volver al Inicio</a>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h1 class="fw-bold text-dark">Encuentra expertos en Cusco</h1>
                <p class="text-muted">Filtrado por profesionales calificados para tu hogar o negocio.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4" style="border-radius: 12px;">
                    <h5 class="fw-bold mb-3"><i class="bi bi-sliders text-danger me-2"></i>Categorías</h5>
                    
                    <div class="list-group list-group-flush" id="categories-container">
                        <button type="button" onclick="filtrarCategoria('Electricista', this)" class="list-group-item list-group-item-action category-btn active d-flex justify-content-between align-items-center mb-1 rounded">
                            <span>⚡ Electricista</span>
                            <span class="badge bg-danger text-white rounded-pill">
                                {{ $trabajadores->where('oficio', 'Electricista')->count() }}
                            </span>
                        </button>
                        <button type="button" onclick="filtrarCategoria('Gasfiteria', this)" class="list-group-item list-group-item-action category-btn d-flex justify-content-between align-items-center mb-1 rounded">
                            <span>🚰 Gasfitería / Plomero</span>
                            <span class="badge bg-secondary text-white rounded-pill">
                                {{ $trabajadores->where('oficio', 'Gasfiteria')->count() }}
                            </span>
                        </button>
                        <button type="button" onclick="filtrarCategoria('Carpintero', this)" class="list-group-item list-group-item-action category-btn d-flex justify-content-between align-items-center mb-1 rounded">
                            <span>🪚 Carpintero</span>
                            <span class="badge bg-secondary text-white rounded-pill">
                                {{ $trabajadores->where('oficio', 'Carpintero')->count() }}
                            </span>
                        </button>
                        <button type="button" onclick="filtrarCategoria('Albanil', this)" class="list-group-item list-group-item-action category-btn d-flex justify-content-between align-items-center mb-1 rounded">
                            <span>🧱 Albañil / Constructor</span>
                            <span class="badge bg-secondary text-white rounded-pill">
                                {{ $trabajadores->where('oficio', 'Albanil')->count() }}
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted fw-semibold" id="texto-resultado">Mostrando resultados para "Electricista"</span>
                </div>

                @if($trabajadores->isEmpty())
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <i class="bi bi-people text-muted" style="font-size: 3rem;"></i>
                        <p class="text-muted mt-3">Aún no hay profesionales registrados en el sistema.</p>
                    </div>
                @endif

                @foreach($trabajadores as $trabajador)
                    <div class="card border-0 shadow-sm p-4 mb-3 trabajador-card {{ $trabajador->oficio === 'Electricista' ? '' : 'd-none' }}" 
                         data-categoria="{{ $trabajador->oficio }}" 
                         style="border-radius: 12px;">
                        <div class="d-flex align-items-start gap-3">
                            
                            <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center fw-bold shadow-sm text-uppercase" style="width: 60px; height: 60px; font-size: 24px;">
                                {{ substr($trabajador->nombre, 0, 1) }}
                            </div>

                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bold mb-0 text-dark">{{ $trabajador->nombre }}</h5>
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">Disponible</span>
                                </div>
                                
                                <p class="text-danger fw-semibold small mb-2">
                                    @if($trabajador->oficio == 'Electricista') ⚡ Electricista
                                    @elseif($trabajador->oficio == 'Gasfiteria') 🚰 Gasfitería / Plomero
                                    @elseif($trabajador->oficio == 'Carpintero') 🪚 Carpintero
                                    @elseif($trabajador->oficio == 'Albanil') 🧱 Albañil / Constructor
                                    @else 🛠️ Profesional @endif
                                </p>
                                
                                <p class="text-muted small mb-3">
                                    {{ $trabajador->descripcion ?? 'Sin descripción detallada por el momento.' }}
                                </p>
                                
                                <div class="d-flex justify-content-between align-items-center border-top pt-3">
                                    <span class="text-muted small">
                                        <i class="bi bi-geo-alt-fill text-danger me-1"></i>{{ $trabajador->ubicacion }}, Cusco
                                    </span>
                                    
                                    <a href="https://wa.me/51{{ $trabajador->celular }}?text=Hola%20{{ urlencode($trabajador->nombre) }},%20vi%20tu%20perfil%20en%20Allin%20Ruway%20y%20necesito%20un%20servicio." 
                                       target="_blank" 
                                       class="btn btn-sm text-white px-3 fw-bold" 
                                       style="background-color: #D13441; border-radius: 6px;">
                                        <i class="bi bi-whatsapp me-1"></i> Contactar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <script>
        function filtrarCategoria(categoria, elementoClikeado) {
            // 1. Cambiar el estado activo en los botones de la izquierda
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-danger', 'text-white', 'border-0');
                const badge = btn.querySelector('.badge');
                if(badge) {
                    badge.classList.remove('bg-white', 'text-danger');
                    badge.classList.add('bg-secondary', 'text-white');
                }
            });

            elementoClikeado.classList.add('active', 'bg-danger', 'text-white', 'border-0');
            const badgeActivo = elementoClikeado.querySelector('.badge');
            if(badgeActivo) {
                badgeActivo.classList.remove('bg-secondary', 'text-white');
                badgeActivo.classList.add('bg-white', 'text-danger');
            }

            // 2. Modificar el texto superior descriptivo
            const nombresBonitos = {
                'Electricista': 'Electricista',
                'Gasfiteria': 'Gasfitería / Plomero',
                'Carpintero': 'Carpintero',
                'Albanil': 'Albañil / Constructor'
            };
            document.getElementById('texto-resultado').innerText = `Mostrando resultados para "${nombresBonitos[categoria]}"`;

            // 3. Mostrar u ocultar las tarjetas de los trabajadores correspondientes
            document.querySelectorAll('.trabajador-card').forEach(card => {
                if (card.getAttribute('data-categoria') === categoria) {
                    card.classList.remove('d-none'); // Lo muestra
                } else {
                    card.classList.add('d-none');    // Lo oculta
                }
            });
        }
    </script>
</body>
</html>