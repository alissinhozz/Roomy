<?php echo $this->extend('templates/layout') ?>
<?php echo $this->section('content') ?>

<div class="card card-outline card-primary rounded-0">
    <div class="card-header">
        <h4 class="mb-0">Lista dos Imóveis </h4>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-stripped table-bordered">
                <colgroup>
                   <!-- <col width="10%">
                    <col width="10%">
                    <col width="15%">
                    <col width="15%">                    
                    <col width="10%">
                    <col width="20%">
                    <col width="10%">-->
                </colgroup>
                <thead>
                    <tr class="bg-gradient bg-primary text-light">                        
                        <th class="py-1 text-center">#</th>
                        <th class="py-1 text-center">Tipo do Imóvel</th>
                        <th class="py-1 text-center">Tamanho do Imóvel</th>
                        <th class="py-1 text-center">Instituição Próxima</th>
                        <th class="py-1 text-center">Estado</th>
                        <th class="py-1 text-center">Cidade</th>
                        <th class="py-1 text-center">Contato</th>
                        <th class="py-1 text-center">Ações</th>  
                
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($list) > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach($list as $row): ?>
                            <tr>
                                <th class="p-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="p-1 align-middle"><?= $row->tipo ?></td>
                                <td class="p-1 align-middle"><?= $row->tam_imovel ?></td>
                                <td class="p-1 align-middle"><?= $row->inst_prox ?></td>
                                <td class="p-1 align-middle"><?= $row->estado ?></td>
                                <td class="p-1 align-middle"><?= $row->cidade ?></td>
                                <td class="p-1 align-middle"><?= $row->contato ?></td>
                                
                                <td class="p-1 align-middle text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?= base_url('main/view_details/'.$row->id) ?>" class="btn btn-default bg-gradient-light border text-dark rounded-0" title="View Contact"><i class="fa fa-eye"></i>a</a>
                                        <a href="<?= base_url('main/edit/'.$row->id) ?>" class="btn btn-primary rounded-0" title="Edit Contact">a<i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url('main/delete/'.$row->id) ?>" onclick="if(confirm('Tem certeza que deseja excluir esse imóvel?') === false) event.preventDefault()" class="btn btn-danger rounded-0" title="Delete Contact"><i class="fa fa-trash">a</i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
 
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>