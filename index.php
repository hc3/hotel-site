<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
</head>

<body>


    <?php include('partials/header.php'); ?>

    <main role="main" class="home">

        <div>
            <img id="img-banner" src="imgs/banner-o-hotel.jpg" alt="banner hotel">
            <div id="texto-banner">
                <p>SURPREENDA-SE COM O GRAN.</p>
                <p>FLEXÍVEL, MODERNO E SOFISTICADO,</p>
                <p>COMPLETO COMO VOCÊ.</p>
            </div>
        </div>

        <section class="section about text-center py-5">
            <div class="container">
                <div>
                    <div>
                        O HOTEL
                    </div>
                    
                    <div>
                        <img src="imgs/traco.png" alt="">
                    </div>
                </div>

                <p>
                    Com uma estrutura ampla e moderna o Granlago Hotel chega a Pouse Alegre
                    oferecendo conforto e satisfação aos seus hóspedes.
                </p>
                <p>
                    O Hotel possui 8 andares e 115 apartamentos dividos em 6 categiruas que vão
                    desde à acessível Standard até a mais completa Suíte Premier, incluindo 6 acomodações
                    disponíveis com acessicibilidade para deficientes físicos. Além disso, possui estacionamento
                    coberto e seguro, ampla área de lazer com piscina aquecida, academia, 2 salas de eventos e um restaurante
                    com cardápio deversificado.
                </p>
                <p>
                    O Granlago Hotel possui localização privilegiada no novo centro comercial de Pouso Alegre,
                    um local tranquilo, de fácil acesso à rodovia Fernão Dias, às principais indústrias e ao centro da cidade.
                </p>
                <img id="img-faca-reserva" src="imgs/faça-sua-reserva.png" alt="">
            </div>
        </section>

        <section class="section about text-center py-5">
            <div class="container">
                <img src="imgs/o-hotel-1.jpg" alt="" style="margin-bottom: 6%;">
                <div>
                <img class="img-list-hotel" src="imgs/o-hotel-2.jpg" alt="">
                <img class="img-list-hotel" src="imgs/o-hotel-3.jpg" alt="">
                <img class="img-list-hotel" src="imgs/o-hotel-4.jpg" alt="">
                </div>
                <div>
                <img class ="img-list-hotel" src="imgs/o-hotel-5.jpg" alt="">
                <img class ="img-list-hotel" src="imgs/o-hotel-6.jpg" alt="">
                <img class ="img-list-hotel" src="imgs/o-hotel-7.jpg" alt="">
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