<?php

class Controller{
    
    public $cadastroIndex = false;
    public $loginIndex = false;
    public $cadastroAutomovel = false;
    public $cadastroAlocacao = false;
    public $cadastroConcessionaria = false;
  
  public function index(){
      if($_SERVER['REQUEST_METHOD'] == "POST"){
          
          if(isset($_POST['cadastrar automovel'])){
              
              $Modelo=$_POST['Modelo'];
              $Preco=$_POST['Preco'];
              $Id_Automovel=$_POST['Id_Automovel'];
              
              $Automovel = new Automovel();
              $this->cadastroAutomovel = $Automovel->addAutomovel($Modelo, $Preco, $Id_Automovel);
          }
          if(isset($_POST['cadastrar alocacao'])){
              
            $Area=$_POST['Area'];
            $Automovel=$_POST['Automovel'];
            $Concessionaria=$_POST['Concessionaria'];
            $Quantidade=$_POST['Quantidade'];
            $Id_Alocacao=$_POST['Id_Alocacao'];
            $Id_Concessionaria=$_POST['Id_Concessionaria'];
            
            $Alocacao = new Alocacao();
            $this->cadastroAlocacao = $Alocacao->addAlocacao($Area, $Automovel, $Concessionaria, $Quantidade, $Id_Alocacao, $Id_Concessionaria);
        }
        if(isset($_POST['cadastrar concessionaria'])){
              
            $Id_Concessionaria=$_POST['Id_Concessionaria'];
            $Concessionaria=$_POST['Concessionaria'];
            
            $Concessionaria = new Concessionaria();
            $this->cadastroConcessionaria = $Concessionaria->addConcessionaria($Id_Concessionaria, $Concessionaria);
        }
        
        
          
    
          }
      }
   
  }   


?>


