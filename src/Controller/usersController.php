<?php

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;




Class usersController extends Appcontroller{

    public function beforeFilter(EventInterface $event){
        parent::beforeFilter($event);
        $this->Auth->allow(['adicionar', 'salvar'] );
    }

public function adicionar(){
    $usersTable = TableRegistry::get('Users');
    $user = $usersTable->newEmptyEntity();
    $this->set('users', $user);
}

public function salvar(){
    $usersTable = TableRegistry::get('Users');
    $user = $usersTable->newEntity($this->request->getData());
    
    if($usersTable->save($user)){
        $this->Flash->set("usuario cadastrado");
    }else {
        $this->Flash->set("usuario com erro");
    }

    $this->redirect('/users/adicionar');
}

public function login(){
if($this->request->is('post')) {
    $user = $this->Auth->identify();

    if($user){
        $this->Auth->setUser($user);
        return $this->redirect($this->Auth->redirectUrl());
    }else {
        $this->Flash->set('Usuario ou senha invalidos', ['element' => 'error']);
    }
}
}

}

?>