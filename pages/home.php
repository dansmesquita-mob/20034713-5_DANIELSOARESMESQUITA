<link rel="stylesheet" href="index.css">
<script src="js/functions.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<?php
    include("dados/dados.php");
    include("function/funcoes.php");
?>
<div class="container">
    <h1 id="titulo">Produtos</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <?php
        // foreach($imagesArray as $img){
        for($i = 0; $i < sizeof($imagesArray); $i++){ 
        ?>
        <div class="card-group">
            <div class="card">
                <img src="<?=$imagesArray[$i]["path"];?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?=$imagesArray[$i]["title"];?></h5>
                <p class="card-text"><?=substr($imagesArray[$i]["description"],0,20);?>...</p>
                <a  id="btn-colordefault" data-bs-toggle="modal" onclick="showModal('<?=$imagesArray[$i]['title'];?>|<?=$imagesArray[$i]['description'];?>|<?=$imagesArray[$i]['path'];?>')" class="btn">Descrição</a>
            </div>
            </div>
        </div>
        <?php
            }
        ?>    
    </div>  
<div>    
