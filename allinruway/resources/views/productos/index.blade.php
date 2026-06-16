@extends('layouts.app')

@section('content')

<section class="container py-5">

    <div class="text-center mb-5">

        <h5 class="text-warning fw-bold">
            PRODUCTOS
        </h5>

        <h1 class="text-white fw-bold display-4">
            Lista de Productos
        </h1>

        <p class="text-light">
            Productos registrados en la base de datos
        </p>

    </div>

    <div class="row g-4">

        @foreach ($productos as $producto)

        <div class="col-md-4">

            <div class="card border-0 shadow-lg h-100"
                 style="
                 background: rgba(255,255,255,0.08);
                 backdrop-filter: blur(10px);
                 border-radius:25px;
                 color:white;
                 overflow:hidden;
                 transition:0.3s;
                 ">

                <div class="card-body p-4">

                    <div class="mb-3">

                        <span class="badge bg-warning text-dark px-3 py-2">
                            ID: {{ $producto->id }}
                        </span>

                    </div>

                    <h3 class="fw-bold mb-3">
                        {{ $producto->nombreProducto }}
                    </h3>

                    <h4 class="text-warning mb-3">
                        S/. {{ $producto->precioProducto }}
                    </h4>

                    <p class="text-light">
                        {{ $producto->descripcionProducto }}
                    </p>

                    <button class="btn btn-warning mt-3 px-4 rounded-pill fw-bold">
                        Ver más
                    </button>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>

@endsection