<h1> login ao sistem </h1>
<?php
$this->Flash->render('auth');
?>
<?php

    echo $this->Form->create();
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->button('Acessar');
    echo $this->Form->end();

?>