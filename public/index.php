<?php
include_once '../init.php';
?>
<html>
    <head>
        <title>Auria | Test Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="css/structure/ui.css"/>
        <link type="text/css" rel="stylesheet" href="css/structure/app.css"/>
        <link type="text/css" rel="stylesheet" href="css/theme/default/app.css"/>
        <link type="text/css" rel="stylesheet" href="css/theme/default/ui.css"/>

        <!-- Libs -->
        <link type="text/css" rel="stylesheet" href="css/libs/perfectScrollbar/perfect-scrollbar.css"/>
        <link rel="stylesheet" href="css/structure/widgets/menu-module-list.css" type="text/css">

    </head>
    <body>
        <div class="ui-container app auria-app">

            <div class="menu-header-logo-animation hidden">
                <div class="auria-logo">
                    <img src="img/logo-blue-64.png" alt="Auria Logo" /> Auria
                </div>
            </div>
            <div class="auria-fade-background hidden"></div>
            <div class="ui-header auria-header">
                <div class="auria-logo">
                    <img src="img/logo-white-64.png" alt="Auria Logo" /> Auria
                </div>
            </div>
            <div class="ui-menu auria-menu hidden">

                <div class="ui-menu-group auria-main-search">
                    <input type="text"
                           placeholder="Procurar por..."
                           class="search-input" />
                </div>

                <div class="ui-menu-group auria-module-menu">
                    <div class="ui-menu-header">
                        Módulos
                    </div>
                    <div class="ui-menu-scroller module-holder">
                        <div class="auria-menu-module-block w-menu-module">
                            <div class="w-module-color-badge"></div>
                            <div class="w-module-icon"></div>
                            <div class="w-module-title">Módulo</div>
                            <div class="w-module-options"></div>
                        </div>
                        <div class="auria-menu-module-block">

                        </div>

                    </div>
                </div>

                <div class="ui-menu-group auria-module-menu">
                    <div class="ui-menu-header">
                        Pessoas
                    </div>
                    <div class="ui-menu-scroller person-holder">

                    </div>
                </div>

                <div class="ui-menu-group auria-module-menu">
                    <div class="ui-menu-header">
                        Atividades
                    </div>
                </div>


            </div>
            <div class="ui-body auria-body">
                <!-- Modulo Arquiteto comeca aqui -->
                <div class="module-container architect-module">
                    <div class="ui-window module-initializaer-container"
                         style="
                         width: 500px;
                         height: 260px;
                         margin: -130px -250px">
                        <div class="ui-window-controls">
                            <div class="close">X</div>
                        </div>

                    </div>
                </div>
                <!-- Fim do Modulo Arquiteto -->
            </div>
            <div class="ui-footer">

            </div>
        </div>

        <script type="text/javascript" src="js/libs/jquery/jquery.js"></script>
        <script type="text/javascript" src="js/libs/underscore/underscore.js"></script>
        <script type="text/javascript" src="js/libs/backbone/backbone.js"></script>
        <script type="text/javascript" src="js/libs/perfectScrollbar/perfect-scrollbar.js"></script>
        <script type="text/javascript" src="js/views/Template.js"></script>
        <script type="text/javascript" src="js/Auria.js"></script>
        <script type="text/javascript" src="js/ui/MainMenu.js"></script>
        <script>
            Template.build('module/menuList', {
                name: 'Teste',
                image : 'teste',
                color : '#4366AF'
            }, function (str) {
                alert(str);
            });
        </script>
    </body>
</html>