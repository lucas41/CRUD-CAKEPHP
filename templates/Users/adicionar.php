<h1> Cadastrar usuarios </h1>

<?php

    echo $this->Form->create($users, ['action' => 'salvar']);
    echo $this->Form->input('username');
    echo $this->Form->password('password');
    echo $this->Form->button('cadastrar');
    echo $this->Form->end();

?>