<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>COLOSSAL</title>
</head>

<body>
    <main>
        <div class="center logo">
            <img class="animate" src="./images/logo.svg" alt="Logo do site">
        </div>
        <section class="content">
            <form action="register.php" method="post">
                <div class="center">
                    <label>Selecione a categoria desejada</label>
                </div>
                <div class="center">
                    <select name="optionSelect" id="optionSelect">
                        <option value="0">Selecione</option>
                        <option value="1">Acessórios</option>
                        <option value="2">Casacos</option>
                        <option value="3">Tênis</option>
                        <option value="4">Chuteiras</option>
                    </select>
                    <input type="submit" value="Selecionar">
                </div>
            </form>

            <?php
            include('array.php');

            if (isset($_COOKIE['item'])) {
                switch ($option = $_COOKIE['item']) {
                    case 1:
                        //ACESSÓRIOS-------------
                        echo ('<label>Acessórios</label>');
                        echo ("<div class=align>");
                        foreach ($acessorios as $acessorios_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Acessórios ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //CASACOS-------------
                        echo ('<label>Casacos</label>');
                        echo ("<div class=align>");
                        foreach ($casacos as $casacos_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Casacos ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //CHUTEIRAS-------------
                        echo ('<label>Chuteiras</label>');
                        echo ("<div class=align>");
                        foreach ($chuteiras as $chuteiras_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Chuteiras ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //SAPATOS--------------
                        echo ('<label>Tênis</label>');
                        echo ("<div class=align>");
                        foreach ($tenis as $tenis_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Sapatos ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");
                        break;

                    case 2:
                        //CASACOS-------------
                        echo ('<label>Casacos</label>');
                        echo ("<div class=align>");
                        foreach ($casacos as $casacos_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Casacos ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //CHUTEIRAS-------------
                        echo ('<label>Chuteiras</label>');
                        echo ("<div class=align>");
                        foreach ($chuteiras as $chuteiras_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Chuteiras ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //SAPATOS--------------
                        echo ('<label>Tênis</label>');
                        echo ("<div class=align>");
                        foreach ($tenis as $tenis_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Sapatos ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                <span class='material-icons'>
                                    favorite_border
                                </span>
                                <p>" . $value[2] . "</p>
                                <span class='material-icons'>
                                    local_grocery_store
                                </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //ACESSÓRIOS-------------
                        echo ('<label>Acessórios</label>');
                        echo ("<div class=align>");
                        foreach ($acessorios as $acessorios_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Acessórios ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                <span class='material-icons'>
                                    favorite_border
                                </span>
                                <p>" . $value[2] . "</p>
                                <span class='material-icons'>
                                    local_grocery_store
                                </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");
                        break;

                    case 3:
                        //SAPATOS--------------
                        echo ('<label>Tênis</label>');
                        echo ("<div class=align>");
                        foreach ($tenis as $tenis_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Sapatos ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //ACESSÓRIOS-------------
                        echo ('<label>Acessórios</label>');
                        echo ("<div class=align>");
                        foreach ($acessorios as $acessorios_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Acessórios ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //CASACOS-------------
                        echo ('<label>Casacos</label>');
                        echo ("<div class=align>");
                        foreach ($casacos as $casacos_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Casacos ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //CHUTEIRAS-------------
                        echo ('<label>Chuteiras</label>');
                        echo ("<div class=align>");
                        foreach ($chuteiras as $chuteiras_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Chuteiras ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");
                        break;

                    case 4:
                        //CHUTEIRAS-------------
                        echo ('<label>Chuteiras</label>');
                        echo ("<div class=align>");
                        foreach ($chuteiras as $chuteiras_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Chuteiras ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //SAPATOS--------------
                        echo ('<label>Tênis</label>');
                        echo ("<div class=align>");
                        foreach ($tenis as $tenis_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Sapatos ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //ACESSÓRIOS-------------
                        echo ('<label>Acessórios</label>');
                        echo ("<div class=align>");
                        foreach ($acessorios as $acessorios_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Acessórios ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");

                        //CASACOS-------------
                        echo ('<label>Casacos</label>');
                        echo ("<div class=align>");
                        foreach ($casacos as $casacos_indice => $value) {
                            echo ("   
                            <div class='card animate_card'>
                                <img src=" . $value[0] . " alt='Casacos ADIDAS'>
                                <div class='center font'>" . $value[1] . "</div>
                                <div class='align font margin'>
                                    <span class='material-icons'>
                                        favorite_border
                                    </span>
                                    <p>" . $value[2] . "</p>
                                    <span class='material-icons'>
                                        local_grocery_store
                                    </span>
                                </div>
                            </div>
                            ");
                        }
                        echo ("</div>");
                        break;

                    default:
                    echo('
                        <label class="center">Ops... você não selecionou nenhuma categoria. Selecione para continuar.</label>
                        <div class="center">
                            <img src="./images/default.svg">
                        </div>
                    ');    
                }
            } else {
                echo ('<label>Produtos</label>');
                echo ("<div class=align>");
                foreach ($produtos as $produtos_indice => $value) {
                    echo ("   
                    <div class='card animate_card'>
                        <img src=" . $value[0] . " alt='Casacos ADIDAS'>
                        <div class='center font'>" . $value[1] . "</div>
                        <div class='align font margin'>
                            <span class='material-icons'>
                                favorite_border
                            </span>
                            <p>" . $value[2] . "</p>
                            <span class='material-icons'>
                                local_grocery_store
                            </span>
                        </div>
                    </div>
                    ");
                }
                echo ("</div>"); 

                echo ("<div class=align>");
                foreach ($produtos1 as $produtos_indice => $value) {
                    echo ("   
                    <div class='card animate_card'>
                        <img src=" . $value[0] . " alt='Casacos ADIDAS'>
                        <div class='center font'>" . $value[1] . "</div>
                        <div class='align font margin'>
                            <span class='material-icons'>
                                favorite_border
                            </span>
                            <p>" . $value[2] . "</p>
                            <span class='material-icons'>
                                local_grocery_store
                            </span>
                        </div>
                    </div>
                    ");
                }
                echo ("</div>");
            }
            ?>
        </section>
        <div class="logo center">
            <div class="rool rool_animate">
                <div>
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                </div>
                <div class="rool_animate2">
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                    &copy Helena Miranda da Silva | 2021 &copy Helena Miranda da Silva | 2021
                </div>
            </div>
        </div>
    </main>
</body>

</html>