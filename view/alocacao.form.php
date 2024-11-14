<?php
include '..\model\alocacao.class.php';
include '..\model\conexao.php';
include '..\control\controller.php';

$c = new Controller();
$c-> index();

if($c->cadastroAlocacao)echo$c->cadastroAlocacao;

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
                    <strong>Formulário da Alocação</strong><!-- comment -->
                    <hr><!-- comment -->
                </h2>Insira a Area:<!-- comment -->
                <p><input type="Area" name="Area" placeholder=" x " required/></p><!-- comment -->
                </h2>Insira o Automovel :<!-- comment -->
                <p><input type="Automovel" name="Automovel" placeholder=" Ex: 1 " required/></p><!-- comment -->
                </h2>Insira a Concessionaria:<!-- comment -->
                <p><input type="Concessionaria" name="Concessionaria" placeholder=" x " required/></p><!-- comment -->
                </h2>Insira a Quantidade:<!-- comment -->
                <p><input type="Quantidade" name="Quantidade" placeholder=" x " required/></p><!-- comment -->
                </h2>Insira o Id Alocação:<!-- comment -->
                <p><input type="Id_Alocacao" name="Id_Alocacao" placeholder=" x " required/></p><!-- comment -->
                </h2>Insira o Id Concessionaria:<!-- comment -->
                <p><input type="Id_Concessionaria" name="Id_Concessionaria" placeholder=" x " required/></p><!-- comment -->
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