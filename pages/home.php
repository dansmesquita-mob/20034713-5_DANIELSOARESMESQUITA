<link rel="stylesheet" href="index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<?php
    include("dados/dados.php");
?>
<div class="container espaco-card">
    <h1 id="titulo">Produtos</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <?php
        foreach($imagesArray as $img){ 
        ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
            <img src="<?=$img["path"];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$img["title"];?></h5>
                <p class="card-text"><?=$img["description"];?></p>
                <a href="#" class="btn btn-primary"><?=$img["name-btn"];?></a>
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
                </button> -->
            </div>
            </div>
        </div>
        <?php
            }
        ?>
        
    </div>  
    <div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
<div>    
