<?php
class Departamento{
    private int $id_departamento;
    private string $descricao;
    private int $status;
    private PDO $conexao;

    public function __construct(Conexao $conexao){
        $this->conexao = $conexao->conecte();
    }

    public function __get($attr){
        return $this->$attr;
    }
    public function __set($attr,$value){
        $this->$attr = $value;
        return $this;
    }

    public function selectAll(){
        $sql = "select * from departamento order by id_departamento";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id){
        $sql = "update departamento set descricao = ?, status_registro = ? where id_departamento = $id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $this->descricao);
        $stmt->bindParam(2, $this->status);
        return $stmt->execute();   
    }

    public function insert(){
        $sql = "insert into departamento(descricao,status_registro)values(?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $this->descricao, PDO::PARAM_STR);
        $stmt->bindParam(2,$this->status,PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id){
        $sql = "delete from departamento where id_departamento = $id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    }

    public function firstRegister($id){
        $sql = "select * from departamento where id_departamento = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1,$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
