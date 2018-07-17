<?php

    $this ->pre([
        'p'=>$data,
        't'=>'Datos '
        ]);
    
     $page = "formuario";
?>

<div class="row">
    <div class="col-6">
        <div class="jmy_web_div" data-page="<?php echo $page; ?>" id="nombre" data-editor="no"><?php $this->pnt('nombre','Nombre'); ?>
        </div>
    </div>
</div>