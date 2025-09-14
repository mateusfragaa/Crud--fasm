<!-- Implementar as mensagens de retorno das operações, porém até o presente momento pretendo trocar os alert por toast-->
<?php 
    session_start();
?>
<div class="row">
    <div class="col-10">
        <h2>Lista Departamento</h2>
    </div>
    <div class="col-2 text-end">
        <a href="index.php?pagina=formDepartamento&action=insert" class="btn btn-primary" title="Novo">Novo</a>
    </div>
</div>

<hr />

<div class="toast-container position-fixed bottom-0 end-0 p-3 " id="toastDiv">
    <!-- Conteúdo dinâmico -->
</div>

<table class="table table-bordered table-hover table-striped mt-3">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            <td>Status</td>
            <td>Opções</td>
        </tr>
    </thead>
    <tbody>
        <?php
            if (count($dados) > 0) {
                foreach ($dados as  $value) {
                    ?>
                    <tr>
                        <td><?= $value['id_departamento'] ?></td>
                        <td><?= $value['descricao'] ?></td>
                        <td><?= ($value['status_registro'] == 1 ? "Ativo" : "Inativo") ?></td>
                        <td>
                            <a href="index.php?pagina=formDepartamento&action=view&id=<?= $value['id_departamento'] ?>" class="btn btn-secondary" title="Visualizar">Visualizar</a>
                            <a href="index.php?pagina=formDepartamento&action=update&id=<?= $value['id_departamento'] ?>" class="btn btn-warning" title="Alteração">Alterar</a>
                            <a href="index.php?action=delete&id=<?= $value['id_departamento'] ?>" class="btn btn-danger" title="Exclusão">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="4">Nenhum registro encontrado...</td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>