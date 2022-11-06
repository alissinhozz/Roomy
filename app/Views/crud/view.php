
<div class="card card-outline card-primary rounded-0">
    <div class="card-header">
        <div class="h4 mb-0">Detalhes do Imóvel</div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <dl>
                <dt class="text-muted">Estado</dt>
                <dd class="ps-4"><?= isset($data['estado']) ? $data['estado'] : '' ?></dd>
                <dt class="text-muted">Cidade</dt>
                <dd class="ps-4"><?= isset($data['cidade']) ? $data['cidade'] : '' ?></dd>
                <dt class="text-muted">Bairro</dt>
                <dd class="ps-4"><?= isset($data['bairro']) ? $data['bairro'] : '' ?></dd>
                <dt class="text-muted">Descrição</dt>
                <dd class="ps-4"><?= isset($data['descricao']) ? $data['descricao'] : '' ?></dd>
                <dt class="text-muted">Tipo do Imóvel</dt>
                <dd class="ps-4"><?= isset($data['tipo']) ? $data['tipo'] : '' ?></dd>
                <dt class="text-muted">Instituição Próxima</dt>
                <dd class="ps-4"><?= isset($data['inst_prox']) ? $data['inst_prox'] : '' ?></dd>
                <dt class="text-muted">Tamanho do Imóvel</dt>
                <dd class="ps-4"><?= isset($data['tam_imovel']) ? $data['tam_imovel'] : '' ?></dd>
                <dt class="text-muted">Tamanho do quarto</dt>
                <dd class="ps-4"><?= isset($data['tamquarto']) ? $data['tamquarto'] : '' ?></dd>
                <dt class="text-muted">Quantidade de Pessoas</dt>
                <dd class="ps-4"><?= isset($data['qtd_pessoas']) ? $data['qtd_pessoas'] : '' ?></dd>
                <dt class="text-muted">Quantidade de Banheiros</dt>
                <dd class="ps-4"><?= isset($data['qtd_ban']) ? $data['qtd_ban'] : '' ?></dd>
                
                
                
                
            </dl>
        </div>
    </div>
    <div class="card-footer text-center">
            <a href="<?= base_url('main/edit/'.(isset($data['id']) ? $data['id'] : '')) ?>" class="btn btn btn-primary btn-sm rounded-0"><i class="fa fa-edit"></i> Editar</a>
            <a href="<?= base_url('main/delete/'.(isset($data['id']) ? $data['id'] : '')) ?>" class="btn btn btn-danger btn-sm rounded-0" onclick="if(confirm('Are you sure to delete this contact details?') === false) event.preventDefault()"><i class="fa fa-trash"></i> Excluir</a>
            <a href="<?= base_url('main/list') ?>" class="btn btn btn-light bg-gradient-light border btn-sm rounded-0"><i class="fa fa-angle-left"></i> Voltar para a lista</a>
    </div>
</div>
