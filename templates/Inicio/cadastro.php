<h1> Vamos cadastrar um novo produto </h1>
    
<?php 
    echo $this->Form->create($produtos, ['type' => 'file', 'action' => 'salva']); 
    echo $this->Form->hidden('id');
    ?>
   <h4> Nome </h4>
    <?php
    echo $this->Form->text('Nome');
    ?>
    
    <br>
    <h4> Preço </h4>
    <?php

    echo $this->Form->number('Preco'); ?>
    <br>
    <h4> Descrição </h4>
    <?php
    echo $this->Form->textarea('descricao');?>
    <br>
    <h4> Foto </h4>
    <?php

   echo $this->Form->file('image_file', ['type' => 'file']); ?>
    <br>
    <h4> Tipo </h4>
 <?php
echo $this->Form->select(
    'tipo',
    ['jogo', 'livro', 'filme'],
    [
        'multiple' => false,
    ]
);
    ?>
<br>
    <?php
    echo $this->Form->button('salva');
    echo $this->Form->end();
?>

