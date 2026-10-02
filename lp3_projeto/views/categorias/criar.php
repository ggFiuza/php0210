<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Novo registro</h3>
        </div>

        <form action="/lp3_projeto/categorias/adicionar" method="POST" class="card-form">
            <div class="form-group">
                <label for="nome">Categoria:</label>
                <input type="text" id="nome" name="nome" required class="form-control" placeholder="Ex: Doces">
            </div>

            <div class="form-group">
                <label for="desc">Descricao</label>
                <input type="desc" id="descricao" name="descricao" required class="form-control" placeholder="Ex: Bolo de cereja Granulado">
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/categorias" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
