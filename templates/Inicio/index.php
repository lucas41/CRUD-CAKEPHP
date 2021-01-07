<?= $this->Form->create(null,['type'=>'get'])?>
<?= $this->Form->control('key',['label' => 'search', 'values'=>$this->request->getQuery('key')])?>
<?= $this->Form->submit()?>
<?= $this->Form->end()?>

<table class=”table”>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>descrição</th>
            <th> visualizar </th>
            <th>Opções</th>
        </tr>
    </thead>

    <tbody>
    <?php 
  
    foreach($produtos as $produto) {
      
       
        ?>
        <tr>
            <td><?= $produto['id']; ?></td>
            <td><?= $produto['Nome']; ?></td>
            <td><?= $produto['Preco']; ?></td>
            <td><?= $produto['descricao']; ?></td>
            <td><?php echo $this->Html->Link('visualizar', ['controller' => 'inicio', 'action' => 'teste',$produto['id']]); ?> </td>
            <td><?php echo $this->Html->Link('editar', ['controller' => 'inicio', 'action' => 'editar',$produto['id']]); ?> &nbsp;
            <?php echo $this->Form->postLink('Apagar', ['controller' => 'inicio', 'action' => 'apagar',$produto['id']],['confirm' => 'Deseja realmente Apagar ' .$produto['Nome']. ' ?']); ?></td>
        </tr>
        <?php
        
    }

    ?>
    </tbody>
</table>

<br>
<a href="/inicio/cadastro" class="button"> Novo Produto </a>
<br><br>

<h3> Filtros </h3>

<button>
<?php 
echo $this->Html->link('Jogos', ['controller' => 'inicio', 'action' => 'jogo']); ?>
</button>

<button>
<?php
echo $this->Html->link('Filme', ['controller' => 'inicio', 'action' => 'filme']); ?>
</button>

<button>
<?php
echo $this->Html->link('livro', ['controller' => 'inicio', 'action' => 'livro']); ?>
</button>

<button>
<?php
echo $this->Html->link('Todos', ['controller' => 'inicio', 'action' => 'index']); ?>
</button>