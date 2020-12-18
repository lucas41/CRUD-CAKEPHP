<h1> Vamos buscar um produto </h1>
    

<?php

  echo $this->Form->create($produtos, ['url' => ['action' => 'buscando']]); 
echo $this->Form->input('buscando', ['controller' => 'inicio', 'action' => 'buscando',$produto['id']]);
echo $this->Form->button('salva');
echo $this->Form->end();
?>


