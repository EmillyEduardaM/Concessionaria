<?php

Class Automovel{
    public function addAutomovel($Preco,$Modelo){
        try{
            $sql = "INSERT INTO automovel (Preco$Preco, Modeloo$Modelo) VALUES (?, ?)";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $Preco);
            $stmt->bindValue(2, $Modelo);
            $stmt->execute();
            return "Automóvel cadastrado com sucesso!";

        }
        catch(PDOException $e){
            if($e->errorInfo[1] == 1062){
                return "Automóvel já cadastrado!";
            }
            else{
                return "Erro ao cadastrar automóvel!". $e->getMessage();
            }
        }
    }
    public function recebeAutomovel($Id_Automovel){
        try {
            $sql = "select * from automovel where Id_Automovel Id_Automovel = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$Id_Automovel);
            
            $stmt->execute();
            
            if($stmt->rowCount()>0){
                $result= $stmt->fetch(PDO::FETCH_BOTH);
                
                return $result;
               
            }
            print("Automóvel não cadastrado!");
            return false;
        } catch (Exception $ex) {
            print("Erro ao buscar automóvel! " . $ex->getMessage());

            return false;
            
        }
    }

    public function deletaAutomovel($Id_Automovel){
        try{
            $sql = "DELETE FROM automovel WHERE Id_Automovel $Id_Automovel = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $Id_Automovel);
            $stmt->execute();
            if($stmt->rowCount() > 0){
            return "Automóvel deletado com sucesso";}
            else{
                return "Nenhuma automóvel excluído";
            }
        }
        catch(Exception $e){
           return "Erro ao remover automóvel: ".$e->getMessage();
        }
    }

    public function updateAutomovel($Id_Automovel, $ModeloNovo, $PrecoNovo){
        try{
            $sql = "UPDATE automovel SET Preco $PrecoNovo = ?, Modelo $ModeloNovo = ? WHERE Id_Automovel $Id_Automovel = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $PrecoNovo);
            $stmt->bindValue(2, $ModeloNovo);
            $stmt->bindValue(3, $Id_Automovel);
            $stmt->execute();
            if($stmt->rowCount() > 0){
            return "Automóvel atualizada com sucesso!";}
            else{
                return "Nenhum automóvel atualizado!";
            }
        }
        catch(Exception $e){
           return "Erro ao atualizar automóvel!".$e->getMessage();
        }
    }

}
?>