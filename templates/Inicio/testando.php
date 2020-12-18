<table class=”table”>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>descrição</th>
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