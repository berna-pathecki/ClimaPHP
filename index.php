<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>CLIMA-BERNA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/clima.js"></script>

        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informações Climáticas de Brusque, desenvolvida por Bernardo da Silva Pathecki"/>
        <meta NAME="ABSTRACT" CONTENT="Informações Climáticas"/>
        <meta name="keywords" content="previsão de Brusque, clima, temperatura para brusque, tempo para brusque, umidade para brusque, previsao para brusque, por do sol de brusque, clima de brusque, temperatura, umidade, vai chover em brusque, dia para sol em brusque, Bernardo da Silva Pathecki, Climas santa catarina, velocidade do vento para brusque"/>
        <meta NAME="title" CONTENT="Informações Climáticas" />
        <meta NAME="identifier-url" content="https://berna-clima.herokuapp.com/" />
        <meta NAME="author" content="Bernardo da Silva Pathecki" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" />
        <meta name="reply-to" content="bernardodasilvapathecki@gmail.com"/>

        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://berna-clima.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Informações Climáticas" />
        <meta property="og:title" content="Informações Climáticas" />
        <meta property="og:description" content="Site de informações Climáticas de Brusque, desenvolvida por Bernardo da Silva Pathecki" />
        <meta property="og:image" content="https://berna-clima.herokuapp.com/img/icones/01n.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />


        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações Climáticas de Brusque, desenvolvida por Bernardo da Silva Pathecki" />
        <meta name="twitter:title" content="Informações Climáticas" />

    </head>
    <body class="bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron bg-warning">
                    <h1 class="text-center text-black">Tempo para Brusque - SC || <span id="temperatura"></span> ||</h1>
                    <p class="text-center">
                        <strong>|| <span id="situacao"></span> ||</strong><br>
                        <img id="icone" src="#"/>
                    </p>
                    <div class="container text-black text-center">
                        <div class="row">
                            <div class="col-sm"><strong>
                                    <img src="img/icones/umidade.png" width="40px"><br>UMIDADE<BR>||<span id="umidade"></span>||
                                </strong>
                            </div>
                            <div class="col-sm"><strong>
                                    <img src="img/icones/tempMaxima.png" width="40px"><br>TEMPERATURA MÁXIMA<BR>||<span id="tempMaxima"></span>||
                                </strong>
                            </div>
                            <div class="col-sm"><strong>
                                    <img src="img/icones/tempMinima.png" width="40px"><br>TEMPERATURA MÍNIMA<BR>||<span id="tempMinima"></span>||
                                </strong>
                            </div>

                            <div class="col-sm"><strong>
                                    <img src="img/icones/pressao.png" width="40px"><br>PRESSÃO<BR>||<span id="pressao"></span>||
                                </strong>
                            </div>

                            <div class="col-sm"><strong>
                                    <img src="img/icones/velocVento.png" width="40px"><br>VELOCIDADE DO VENTO<BR>||<span id="velocVento"></span>||
                                </strong>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row text-white text-center">
                        <div class="col"><strong>
                                <img src="img/icones/nascer01.png" width="100px"><br>NASCER DO SOL<BR>||<span id="nascerSol"></span>||
                            </strong>
                        </div>
                        <div class="col "><strong>
                                <img src="img/icones/por01.png" width="100px"><br>PÔR DO SOL<BR>||<span id="porSol"></span>||
                            </strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
