<?php 
session_start();
    if ($action == "insert") {
        $_SESSION['operacao'] = "Novo";
    } elseif ($action == "update") {
        $_SESSION['operacao'] = "Alteração";
    } elseif ($action == "delete") {
        $_SESSION['operacao'] = "Exclusão";
    } elseif ($action == "view") {
        $_SESSION['operacao'] = "Visualização";
    }
?>

<div class="toast-container position-fixed bottom-0 end-0 p-3 " id="toastDiv">
    <!-- Conteúdo dinâmico -->
</div>

<div class="row mb-3">
    <div class="col-10">
        <h2>Departamento - <?= $_SESSION['operacao'] ?></h2>
    </div>
</div>
<hr />
<form method="POST" action="">

    <div class="row mb-3">
        <div class="col-8">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" 
                name="descricao" id="descricao" 
                placeholder="Descrição do Departamento"
                value = "<?= $dados['descricao'] ?? ""?>"
                <?php if ($action !== "update" && $action !== "insert") : ?>
                    disabled
                <?php endif;?>
                required autofocus>
        </div>
        <div class="col-4">
            <label for="statusRegistro" class="form-label">Status</label>
            <select class="form-select" name="statusRegistro" id="statusRegistro" aria-label="Default_select_statusRegistro" 
                <?php if ($action !== "update" && $action !== "insert") : ?>
                    disabled
                <?php endif;?>>
                <option disabled>...</option>
                <option <?= (isset($dados['status_registro']) ? ($dados['status_registro'] == "1" ? "selected" : "") : "") ?> value="1">Ativo</option>
                <option <?= (isset($dados['status_registro']) ? ($dados['status_registro'] == "2" ? "selected" : "") : "") ?> value="2">Inativo</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12 mt-3">
            <a href="index.php?pagina=listaDepartamento&action=list" class="btn btn-secondary" title="Voltar">Voltar</a>
            <?php if ($action == "update" || $action == "insert") :?>
                <button type="submit" id="liveToastBtn" class="btn btn-primary">Gravar</button>
            <?php endif;?>
        </div>
    </div>

</form>