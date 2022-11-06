<?php echo $this->extend('templates/layout') ?>
<?php echo $this->section('content') ?>
<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-edit"></i>Editar Imóvel</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save') ?>" method="POST" id="create-form">
                <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
    
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tipo" class="control-label">Tipo do Imóvel </label>
                            <input type="text" class="form-control" id="tipo" name="tipo" required="required" value="<?= isset($data['tipo']) ? $data['tipo'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="inst_prox" class="control-label">Instuições Próximas</label>
                            <input type="text" class="form-control" id="inst_prox" name="inst_prox" required="required" value="<?= isset($data['inst_prox']) ? $data['inst_prox'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tam_imovel" class="control-label">Tamanho do Imóvel</label>
                            <input type="text" class="form-control" id="tam_imovel" name="tam_imovel" required="required" value="<?= isset($data['tam_imovel']) ? $data['tam_imovel'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tamquarto" class="control-label">Tamanho do Quarto</label>
                            <input type="text" class="form-control" id="tamquarto" name="tamquarto" required="required" value="<?= isset($data['tamquarto']) ? $data['tamquarto'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="qtd_pessoas" class="control-label">Quantidade de Pessoas</label>
                            <input type="text" class="form-control" id="qtd_pessoas" name="qtd_pessoas" required="required" value="<?= isset($data['qtd_pessoas']) ? $data['qtd_pessoas'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="qtd_ban" class="control-label">Quantidade de Banheiros </label>
                            <input type="text" class="form-control" id="qtd_ban" name="qtd_ban" required="required" value="<?= isset($data['qtd_ban']) ? $data['qtd_ban'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="estado" class="control-label">Estado </label>
                            <input type="text" class="form-control" id="estado" name="estado" required="required" value="<?= isset($data['estado']) ? $data['estado'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="cidade" class="control-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" required="required" value="<?= isset($data['cidade']) ? $data['cidade'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="bairro" class="control-label">Bairro </label>
                            <input type="text" class="form-control" id="bairro" name="bairro" required="required" value="<?= isset($data['bairro']) ? $data['bairro'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="contato" class="control-label">Contato </label>
                            <input type="text" class="form-control" id="contato" name="contato" required="required" value="<?= isset($data['contato']) ? $data['contato'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="descricao" class="control-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" required="required" value="<?= isset($data['descricao']) ? $data['descricao'] : '' ?>">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Salvar</button>
        <a class="btn btn-secondary" href="<?= base_url('main/view_details/'.(isset($data['id']) ? $data['id'] : '')) ?>"><i class="fa fa-times"></i> Cancelar</a>
    </div>
</div>
<?php echo $this->endSection() ?>