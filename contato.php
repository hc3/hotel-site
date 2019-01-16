<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reservas</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <style>


    </style>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
</head>

<body>


    <?php include('partials/header.php'); ?>

    <main role="main" class="home">

        <div>
            <img id="img-banner" src="imgs/banner-acomodacoes.png" alt="banner hotel">
            <div id="texto-banner">
                <p>Reservas</p>
            </div>
        </div>

        <section class="section about py-5">
            <div class="container">
                <div class="row">
                    <div>
                        <div>
                            Contato
                        </div>
                        
                        <div>
                            <img src="imgs/traco.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p> 
                            O Granlago Hotel possui localização privilegiada no novo centro comercial de Pouso Alegre, um local tranquilo,
                        de fácil acesso á rodovia Fernão Dias, ás principais indústrias e ao centro da cidade.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="imgs/mapa.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="imgs/faça-sua-reserva.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <?php include('partials/footer.php'); ?>

    </main>
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

</body>

</html>