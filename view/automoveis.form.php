<?php
include '..\model\automoveis.class.php';
include '..\model\conexao.php';
include '..\control\controller.php';

$u = new Controller();
$c-> index();

if($c->cadastroAutomovel)echo$c->cadastroAutomovel;

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Pagina Inicial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        
    </head>
    <body>
        <div class="container">
        <header class="row clearfix">
        </header>
      
            <div class="row clearfix">
        
        <section class="col-md-6">
            <form method="post">
                <h2><!-- comment -->
                    <strong>Formulário do Automovel</strong><!-- comment -->
                    <hr><!-- comment -->
                
                </h2>Insira o Modelo:<!-- comment -->
                <p><input type="Modelo" name="Modelo" placeholder=" Ex: Hyundai HB20 " required/></p><!-- comment -->
                </h2>Insira o Preco:<!-- comment -->
                <p><input type="Preco" name="Preco" placeholder=" Ex: 43115 " required/></p><!-- comment -->
               </h2>Insira o Id do Automovel:<!-- comment -->
                <p><input type="Id_Automovel" name="Id_Automovel" placeholder=" Ex: 11 " required/></p><!-- comment -->

                <p><button name="Inserir" type="submit">Cadastrar Automovel</button></p>               
            </form>
        </section>
        
        <section class="col-md-6">
            <form method="POST">
                <hr>
                <h2>
                  
             </form>
        </section>
            </div>
        
        <section class="row clearfix">
            <hr><!-- comment -->
        
                </p><!-- comment -->
            </div>
            </div>
          
        </section>
    </div>
    </body>
</html>