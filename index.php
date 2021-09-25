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
                    <label>Selecione o produto desejado</label>
                </div>
                <div class="center">
                    <select name="optionSelect" id="optionSelect">
                        <option value="0">Selecione</option>
                        <option value="1">Acessórios</option>
                        <option value="2">Sapatos</option>
                    </select>
                    <input type="submit" value="Selecionar">
                </div>
            </form>

            <?php
            if (isset($_COOKIE['item'])) {
                if ($_COOKIE['item'] == 1) {
                    echo ('
                            <label>Acessórios</label>
                            <div class="align">
                                <div class="card animate_card">
                                    <img src="./images/a1.jpg" alt="Tênis preto adidas">
                                    <div class="center font">MOCHILA STAN</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$499,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
            
                                <div class="card animate_card">
                                    <img src="./images/a2.jpg" alt="Tênis preto adidas">
                                    <div class="center font">Y-3 CH1 REF BP</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$2.199,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
                
                                <div class="card animate_card">
                                    <img src="./images/a3.jpg" alt="Tênis preto adidas">
                                    <div class="center font">MALA TROLLEY PEQUENA</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$999,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
            
                                <div class="card animate_card">
                                    <img src="./images/a4.jpg" alt="Tênis preto adidas">
                                    <div class="center font">MALA DUFFEL 4ATHLTS PEQUENA</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$279,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
                            </div>
        
                            <label>Sapatos</label>
                            <div class="align">
                                <div class="card animate_card">
                                    <img src="./images/t1.jpg" alt="Tênis preto adidas">
                                    <div class="center font">TÊNIS ZX 2K BOOST</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$649,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
        
                                <div class="card animate_card">
                                    <img src="./images/t2.jpg" alt="Tênis preto adidas">
                                    <div class="center font">TÊNIS D.O.N. ISSUE #3</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$799,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
        
                                <div class="card animate_card">
                                    <img src="./images/t3.jpg" alt="Tênis preto adidas">
                                    <div class="center font">TÊNIS CHOIGO</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$599,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
        
                                <div class="card animate_card">
                                    <img src="./images/t4.jpg" alt="Tênis preto adidas">
                                    <div class="center font">Y-3 RUNNER 4D IO</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$2.699,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
                            </div>
                        ');
                } else {
                    echo ('
                            <label>Sapatos</label>
                            <div class="align">
                                <div class="card animate_card">
                                    <img src="./images/t1.jpg" alt="Tênis preto adidas">
                                    <div class="center font">TÊNIS ZX 2K BOOST</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$649,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
            
                                <div class="card animate_card">
                                    <img src="./images/t2.jpg" alt="Tênis preto adidas">
                                    <div class="center font">TÊNIS D.O.N. ISSUE #3</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$799,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
            
                                <div class="card animate_card">
                                    <img src="./images/t3.jpg" alt="Tênis preto adidas">
                                    <div class="center font">TÊNIS CHOIGO</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$599,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
            
                                <div class="card animate_card">
                                    <img src="./images/t4.jpg" alt="Tênis preto adidas">
                                    <div class="center font">Y-3 RUNNER 4D IO</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$2.699,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <label>Acessórios</label>
                            <div class="align">
                                <div class="card animate_card">
                                    <img src="./images/a1.jpg" alt="Tênis preto adidas">
                                    <div class="center font">MOCHILA STAN</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$499,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
            
                                <div class="card animate_card">
                                    <img src="./images/a2.jpg" alt="Tênis preto adidas">
                                    <div class="center font">Y-3 CH1 REF BP</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$2.199,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
            
                                <div class="card animate_card">
                                    <img src="./images/a3.jpg" alt="Tênis preto adidas">
                                    <div class="center font">MALA TROLLEY PEQUENA</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$999,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
            
                                <div class="card animate_card">
                                    <img src="./images/a4.jpg" alt="Tênis preto adidas">
                                    <div class="center font">MALA DUFFEL 4ATHLTS PEQUENA</div>
                                    <div class="align font margin">
                                        <span class="material-icons">
                                            favorite_border
                                        </span>
                                        <p>R$279,99</p>
                                        <span class="material-icons">
                                            local_grocery_store
                                        </span>
                                    </div>
                                </div>
                            </div>    
                        ');
                }
            } else{
                echo ('
                <label>Sapatos</label>
                <div class="align">
                    <div class="card animate_card">
                        <img src="./images/t1.jpg" alt="Tênis preto adidas">
                        <div class="center font">TÊNIS ZX 2K BOOST</div>
                        <div class="align font margin">
                            <span class="material-icons">
                                favorite_border
                            </span>
                            <p>R$649,99</p>
                            <span class="material-icons">
                                local_grocery_store
                            </span>
                        </div>
                    </div>

                    <div class="card animate_card">
                        <img src="./images/t2.jpg" alt="Tênis preto adidas">
                        <div class="center font">TÊNIS D.O.N. ISSUE #3</div>
                        <div class="align font margin">
                            <span class="material-icons">
                                favorite_border
                            </span>
                            <p>R$799,99</p>
                            <span class="material-icons">
                                local_grocery_store
                            </span>
                        </div>
                    </div>

                    <div class="card animate_card">
                        <img src="./images/t3.jpg" alt="Tênis preto adidas">
                        <div class="center font">TÊNIS CHOIGO</div>
                        <div class="align font margin">
                            <span class="material-icons">
                                favorite_border
                            </span>
                            <p>R$599,99</p>
                            <span class="material-icons">
                                local_grocery_store
                            </span>
                        </div>
                    </div>

                    <div class="card animate_card">
                        <img src="./images/t4.jpg" alt="Tênis preto adidas">
                        <div class="center font">Y-3 RUNNER 4D IO</div>
                        <div class="align font margin">
                            <span class="material-icons">
                                favorite_border
                            </span>
                            <p>R$2.699,99</p>
                            <span class="material-icons">
                                local_grocery_store
                            </span>
                        </div>
                    </div>
                </div>

                <label>Acessórios</label>
                <div class="align">
                    <div class="card animate_card">
                        <img src="./images/a1.jpg" alt="Tênis preto adidas">
                        <div class="center font">MOCHILA STAN</div>
                        <div class="align font margin">
                            <span class="material-icons">
                                favorite_border
                            </span>
                            <p>R$499,99</p>
                            <span class="material-icons">
                                local_grocery_store
                            </span>
                        </div>
                    </div>

                    <div class="card animate_card">
                        <img src="./images/a2.jpg" alt="Tênis preto adidas">
                        <div class="center font">Y-3 CH1 REF BP</div>
                        <div class="align font margin">
                            <span class="material-icons">
                                favorite_border
                            </span>
                            <p>R$2.199,99</p>
                            <span class="material-icons">
                                local_grocery_store
                            </span>
                        </div>
                    </div>

                    <div class="card animate_card">
                        <img src="./images/a3.jpg" alt="Tênis preto adidas">
                        <div class="center font">MALA TROLLEY PEQUENA</div>
                        <div class="align font margin">
                            <span class="material-icons">
                                favorite_border
                            </span>
                            <p>R$999,99</p>
                            <span class="material-icons">
                                local_grocery_store
                            </span>
                        </div>
                    </div>

                    <div class="card animate_card">
                        <img src="./images/a4.jpg" alt="Tênis preto adidas">
                        <div class="center font">MALA DUFFEL 4ATHLTS PEQUENA</div>
                        <div class="align font margin">
                            <span class="material-icons">
                                favorite_border
                            </span>
                            <p>R$279,99</p>
                            <span class="material-icons">
                                local_grocery_store
                            </span>
                        </div>
                    </div>
                </div>    
            ');
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
                </div>
                <div class="rool_animate2">
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