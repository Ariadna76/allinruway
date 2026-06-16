<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            background:#0f1024;
            overflow-x:hidden;
        }

        /* NAVBAR */

        .navbar{
            padding:20px 70px;
            position:absolute;
            width:100%;
            z-index:1000;
        }

        .navbar-brand{
            color:white;
            font-weight:700;
            font-size:24px;
        }

        .navbar-nav .nav-link{
            color:#dcdcdc;
            margin-left:25px;
            transition:0.3s;
            font-size:14px;
        }

        .navbar-nav .nav-link:hover{
            color:#ff5e00;
        }

        /* HERO */

        .hero{
            min-height:100vh;
            background:
            linear-gradient(rgba(15,23,42,0.85), rgba(15,23,42,0.9)),
            url('https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070&auto=format&fit=crop');
            background-size:cover;
            background-position:center;
            position:relative;
            display:flex;
            align-items:center;
            overflow:hidden;
        }

        /* CIRCULOS */

        .hero::before{
            content:'';
            position:absolute;
            width:850px;
            height:850px;
            border:70px solid #ff5e00;
            border-radius:50%;
            right:-350px;
            top:-150px;
            opacity:0.9;
        }

        .hero::after{
            content:'';
            position:absolute;
            width:700px;
            height:700px;
            border:2px solid #ff5e00;
            border-radius:50%;
            left:-350px;
            top:-100px;
            opacity:0.5;
        }

        /* CONTENIDO */

        .hero-content{
            position:relative;
            z-index:10;
            color:white;
            max-width:600px;
            margin-left:80px;
        }

        .hero-content h5{
            color:#ff5e00;
            font-size:18px;
            margin-bottom:15px;
            letter-spacing:2px;
        }

        .hero-content h1{
            font-size:65px;
            font-weight:700;
            line-height:1.1;
            margin-bottom:25px;
        }

        .hero-content p{
            color:#d3d3d3;
            font-size:16px;
            margin-bottom:30px;
        }

        .btn-custom{
            background:#ff5e00;
            color:white;
            padding:14px 35px;
            border:none;
            border-radius:30px;
            font-weight:600;
            transition:0.3s;
            text-decoration:none;
        }

        .btn-custom:hover{
            background:white;
            color:#ff5e00;
        }

        /* CARDS */

        .services{
            position:absolute;
            bottom:40px;
            width:100%;
            z-index:20;
        }

        .service-box{
            background:rgba(255,255,255,0.05);
            backdrop-filter:blur(10px);
            border:1px solid rgba(255,255,255,0.1);
            padding:25px;
            border-radius:20px;
            color:white;
            transition:0.3s;
            height:100%;
        }

        .service-box:hover{
            transform:translateY(-10px);
            background:#ff5e00;
        }

        .service-box h4{
            font-size:20px;
            margin-bottom:15px;
        }

        .service-box p{
            font-size:14px;
            color:#ddd;
        }

        @media(max-width:991px){

            .hero-content{
                margin:120px 30px;
            }

            .hero-content h1{
                font-size:45px;
            }

            .services{
                position:relative;
                margin-top:50px;
                padding-bottom:50px;
            }

            .navbar{
                padding:20px;
            }
        }

    </style>
</head>
<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">ALLIN RUWAY</a>

            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="menu">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/galeria">Galería</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contactos">Contactos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/productos">Servicios</a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

    <!-- HERO -->

    <section class="hero">

        <div class="hero-content">

            <h5>PLATAFORMA DIGITAL DE SERVICIOS </h5>

            <h1>
                Conectamos trabajadores <br>
                independientes con clientes en Cusco
            </h1>

            <p>
                Allin Ruway es una plataforma web diseñada para ayudar a carpinteros electricistas, gasfiteros, técnicos y otros trabajadores independientes a encontrar más oportunidades laborales de manera rápida, segura y confiable.
            </p>

            <a href="#" class="btn-custom">
                EXPLORAR SERVICIOS 
            </a>

        </div>
        <br> <br>

        <!-- SERVICES -->

        <div class="services container">

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="service-box">

                        <h4>CARPINTERÍA</h4>

                        <p>
                            Encuentra carpinteros calificados para muebles, reparaciones y proyectos personalizados.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="service-box">

                        <h4>ELECTRICIDAD</h4>

                        <p>
                            Técnicos especializados para instalaciones, mantenimiento y reparación eléctrica.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="service-box">

                        <h4>GASFITERÍA</h4>

                        <p>
                            Servicios rápidos y confiables para problema tuberías, agua y mantenimiento del hogar.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>