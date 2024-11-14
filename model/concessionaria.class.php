<?php

Class Concessionaria{
    public function addConcessionaria($Nome){
        try{
            $sql = "INSERT INTO concessionaria (concessionaria) VALUES (?)";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $Nome);
            $stmt->execute();
            return "Concessionaria Cadastrado com Sucesso";

        }
        catch(PDOException $e){
            if($e->errorInfo[1] == 1062){
                return "Concessionária já cadastrado!";
            }
            else{
                return "Erro ao cadastrar concessionária!". $e->getMessage();
            }
        }
    }
    public function recebeConcessionaria($Nome){
        try {
            $sql = "select * from concessionaria where concessionaria = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$Nome);
            
            $stmt->execute();
            
            if($stmt->rowCount()>0){
                $result= $stmt->fetch(PDO::FETCH_BOTH);
                
                return $result;
               
            }
            print("Concessionária não cadastrada!");
            return false;
        } catch (PDOException $ex) {
            print("Erro ao buscar concessionária! " . $ex->getMessage());

            return false;
            
        }
    }

    public function deleteConcessionaria($Nome){
        try{
            $sql = "DELETE FROM concessionaria WHERE concessionaria = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $Nome);
            $stmt->execute();
            if($stmt->rowCount() > 0){
            return "Concessionária removida com sucesso!";}
            else{
                return "Nenhuma concessionária deletada!";
            }
        }
        catch(PDOException $e){
           return "Erro ao deletar concessionária! ".$e->getMessage();
        }
    }

    public function updateConcessionaria($nomeAntigo, $nomeNovo){
        try{
            $sql = "UPDATE concessionaria SET concessionaria = ? WHERE concessionaria = ?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $nomeNovo);
            $stmt->bindValue(2, $nomeAntigo);
            $stmt->execute();
            if($stmt->rowCount() > 0){
            return "Concessionária atualizada com sucesso!";}
            else{
                return "Nenhuma concessionária atualizada!";
            }
        }
        catch(PDOException $e){
           return "Erro ao atualizar concessionária! ".$e->getMessage();
        }
    }

}
?>