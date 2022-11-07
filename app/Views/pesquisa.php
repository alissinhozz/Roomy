<?php echo $this->extend('layout') ?>
<?php echo $this->section('content') ?>

<form method="post" style="width: 50rem;  margin-top: 40px; margin-left: 200PX">
<div class="input-group">
  <input type="text" name="inputName" class="form-control rounded" placeholder="Insira o nome da cidade" aria-label="Search" aria-describedby="search-addon" />
  <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
</div>
</form>
<section class="py-5">
<div class="container px-4 px-lg-5 mt-5">
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    <?php if(isset($cidade)){
    foreach($cidade as $city):?>
           <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $city['cidade']?></h5>
                                    <h6 class="fw-bolder"><?php echo $city['estado']?></h6>
                                    <h6 class="fw-bolder">Próximo a <?php echo $city['inst_prox']?></h6>
                                    <!-- Product reviews-->
                                   
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"> 
                            <form class="d-flex" action="imovel">
                            <button>Saiba mais</button>
                             </form>
                            </div>
                        </div>
                    </div>
              
                
        <?php endforeach;
    }
    ?>
     </div>
    </div>
        
        </section> 


<?php echo $this->endSection() ?>