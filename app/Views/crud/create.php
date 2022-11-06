<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-plus-square"></i> Adicionar novo Imóvel</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save') ?>" method="POST" id="create-form">
                <input type="hidden" name="id">
 
                <div class="mb-3">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tipo" class="control-label">Tipo do Imóvel</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" required="required" value="<?= !empty($request->getPost('tipo')) ? $request->getPost('tipo') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="inst_prox" class="control-label">Instuições Próximas</label>
                            <input type="text" class="form-control" id="inst_prox" name="inst_prox" required="required" value="<?= !empty($request->getPost('inst_prox')) ? $request->getPost('inst_prox') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tam_imovel" class="control-label">Tamanho do Imóvel</label>
                            <input type="text" class="form-control" id="tam_imovel" name="tam_imovel" required="required" value="<?= !empty($request->getPost('tam_imovel')) ? $request->getPost('tam_imovel') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tamquarto" class="control-label">Tamanho do Quarto</label>
                            <input type="text" class="form-control" id="tamquarto" name="tamquarto" required="required" value="<?= !empty($request->getPost('tamquarto')) ? $request->getPost('tamquarto') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="qtd_pessoas" class="control-label">Quantidade de Pessoas</label>
                            <input type="text" class="form-control" id="qtd_pessoas" name="qtd_pessoas" required="required" value="<?= !empty($request->getPost('qtd_pessoas')) ? $request->getPost('qtd_pessoas') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="qtd_ban" class="control-label">Quantidade de Banheiros</label>
                            <input type="text" class="form-control" id="qtd_ban" name="qtd_ban" required="required" value="<?= !empty($request->getPost('qtd_ban')) ? $request->getPost('qtd_ban') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="estado" class="control-label">Estado</label>
                            <input type="text" class="form-control" id="estado" name="estado" required="required" value="<?= !empty($request->getPost('estado')) ? $request->getPost('estado') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="cidade" class="control-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" required="required" value="<?= !empty($request->getPost('cidade')) ? $request->getPost('cidade') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="bairro" class="control-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" required="required" value="<?= !empty($request->getPost('bairro')) ? $request->getPost('bairro') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="contato" class="control-label">Contato </label>
                            <input type="text" class="form-control" id="contato" name="contato" required="required" value="<?= !empty($request->getPost('contato')) ? $request->getPost('contato') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="descricao" class="control-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" required="required" value="<?= !empty($request->getPost('descricao')) ? $request->getPost('descricao') : '' ?>">
                        </div>
                    </div>      
                </div>
            
                
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Salvar</button>
        <button class="btn btn-secondary" form="create-form" type="reset"><i class="fa fa-times"></i> Resetar</button>
    </div>
</div>