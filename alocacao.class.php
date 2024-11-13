<?php

Class Alocacao{
    public function addAlocacao($Quantidade, $Id_Veiculo, $Id_Concessionaria, $Id_Cliente){
        try{
            $sql = "INSERT INTO alocacao (Quantidade, Id_Veiculo, Id_Concessionaria, Id_Cliente) VALUES (?, ?, ?, ?)";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $Quantidade);
            $stmt->bindValue(2, $Id_Veiculo);
            $stmt->bindValue(3, $Id_Concessionaria);
            $stmt->bindValue(4, $Id_Cliente);
            $stmt->execute();
            return "Veículo alocado com sucesso!";

        }
        catch(PDOException $e){
            if($e->errorInfo[1] == 1062){
                return "Veículo já locado!";
            }
            else{
                return "Erro ao cadastrar locação". $e->getMessage();
            }
        }
    }
    public function recebeAlocacao($Id_Alocacao){
        try {
            $sql = "select * from alocacao where Id_Alocacao = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$Id_Alocacao);
            
            $stmt->execute();
            
            if($stmt->rowCount()>0){
                $result= $stmt->fetch(PDO::FETCH_BOTH);
                
                return $result;
               
            }
            print("Alocação não cadastrada");
            return false;
        } catch (PDOException $ex) {
            print("Erro ao buscar alocação." . $ex->getMessage());

            return false;
            
        }
    }

    public function deletaAlocacao($Id_Alocacao){
        try{
            $sql = "DELETE FROM alocacao WHERE Id_Alocacao = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $Id_Alocacao);
            $stmt->execute();
            if($stmt->rowCount() > 0){
            return "Alocação deletada com sucesso!";}
            else{
                return "Alocação não deletada!";
            }
        }
        catch(PDOException $e){
           return "Erro ao excluir alocação! ".$e->getMessage();
        }
    }

    public function updateAlocacao($Id_Alocacao, $Quantidade, $Id_Veiculo, $Id_Concessionaria, $Id_Cliente){
        try{
            $sql = "UPDATE alocacao SET Quantidade = ?, Id_Veiculo = ?, Id_Concessionaria = ?, Id_Cliente = ?  WHERE Id_Alocacao = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $Quantidade);
            $stmt->bindValue(2, $Id_Veiculo);
            $stmt->bindValue(3, $Id_Concessionaria);
            $stmt->bindValue(4, $Id_Cliente);
            $stmt->bindValue(5, $Id_Alocacao);
            $stmt->execute();
            if($stmt->rowCount() > 0){
            return "Locação atualizada com sucesso!";}
            else{
                return "Locação não atualizada!";
            }
        }
        catch(PDOException $e){
           return "Erro ao atualizar locação!".$e->getMessage();
        }
    }

}
?>