<?php
require_once "../model/Conexao.php";
require_once "../model/Departamento.php";

$conexao = new Conexao();

$action = $_GET['action'] ?? "list";
$pagina = $_GET['pagina'] ?? "";
$process = 0;
if ($action === "list") {

    $departamento = new Departamento($conexao);
    $dados  = $departamento->selectAll();
    $pagina = "listaDepartamento";

}elseif ($action === "insert" && $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $departamento = new Departamento($conexao);
    $departamento->__set('descricao',$_POST['descricao'])->__set('status',$_POST['statusRegistro']);
    ($departamento->insert()) ? $process = 1 : $process;
    header("Location: index.php?pagina=formDepartamento&action=insert&process=$process");
}elseif($action === "update"  && $_SERVER['REQUEST_METHOD'] == 'POST'){

    $departamento = new Departamento($conexao);
    $departamento->__set('descricao',$_POST['descricao'])->__set('status',$_POST['statusRegistro']);
    ($departamento->update($_GET['id'])) ? $process = 1 : $process;  
    header("Location: index.php?action=list&process=$process");

}elseif($action === "delete"){

    $departamento = new Departamento($conexao);
    $departamento->delete($_GET['id']);
    header("Location: index.php?action=list");
}
elseif (!empty($pagina) && $action !== "insert") {

    $departamento = new Departamento($conexao);
    $dados = $departamento->firstRegister($_GET['id']);
}
// Para requisitar a página certa
if (!empty($pagina)) require "../view/$pagina.php";