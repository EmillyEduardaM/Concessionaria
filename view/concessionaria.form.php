<?php
include '..\model\concessionaria.class.php';
include '..\model\conexao.php';
include '..\control\controller.php';

$c = new Controller();
$c-> index();

if($c->cadastroConcessionaria)echo$c->cadastroConcessionaria;

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
                    <strong>Formulário da Concessionaria</strong><!-- comment -->
                    <hr><!-- comment -->
                
                </h2>Insira o Id Concessionaria:<!-- comment -->
                <p><input type="Id_Concessionaria" name="Id_Concessionaria" placeholder=" x " required/></p><!-- comment -->
                </h2>Insira a Concessionaria:<!-- comment -->
                <p><input type="Concessionaria" name="Concessionaria" placeholder=" Ex: Atenass " required/></p><!-- comment -->

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