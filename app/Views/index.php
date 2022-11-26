<?php echo $this->extend('layout') ?>
<?php echo $this->section('content') ?>
<section class="py-5">
<div class="container px-4 px-lg-5 mt-5">
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    <?php foreach($imoveis as $imovel):?>
           <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $imovel['cidade']?></h5>
                                    <h6 class="fw-bolder"><?php echo $imovel['estado']?></h6>
                                    <h6 class="fw-bolder">Próximo a <?php echo $imovel['inst_prox']?></h6>
                                    <!-- Product reviews-->
                                   
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"> 
                            <p><?php echo anchor('imovel/index/'.$imovel['id'], 'Saiba mais')?></p>
                            </div>
                        </div>
                    </div>
              
            
        <?php endforeach;?>
        </div>
    </div>
        
        </section>          
<?php echo $this->endSection() ?>