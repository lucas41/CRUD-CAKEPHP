<h1> Vamos cadastrar um novo produto </h1>
    
<?php 
    echo $this->Form->create($produtos, ['url' => ['action' => 'salva']]); 
    echo $this->Form->hidden('id');
    ?>
    <?php
    echo $this->Form->text('Nome');
    ?>
    
    <br>

    <?php

    echo $this->Form->number('Preco'); ?>
    <br>
    <?php
    echo $this->Form->textarea('descricao');?>
    <br>

    <?php
    echo $this->Form->button('salva');
    echo $this->Form->end();
?>

<a href="/inicio" class="button" style="position: fixed; top: 550px;"> Home </a>