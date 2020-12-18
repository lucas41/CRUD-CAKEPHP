<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;


class InicioController extends AppController
{

    public function index(){

        $ProdutosTable= TableRegistry::get('produtos');  
        $produtos = $ProdutosTable->find('all');
        $this->set('produtos', $produtos);
        
    }

    public function testando(){

        $ProdutosTable= TableRegistry::get('produtos'); 
         $produtos = [];
        $produtos[] = $ProdutosTable->get(19);
        $this->set('produtos', $produtos);
        
    }

    public function cadastro(){
        $produtosTable = TableRegistry::get('Produtos');
        $produtos = $produtosTable->newEmptyEntity();
        $this->set('produtos', $produtos);
    }

    public function salva(){
        $produtosTable = TableRegistry::get('Produtos');
        $dados = $this->request->getData();
        
        $produtos = $produtosTable->newEntity($dados);

        if($produtosTable->save($produtos)) {
            $msg = "Produto cadastrado";  
          $this->Flash->set($msg, ['element' => 'success']);
        }else {
            $msg = "Falha a cadastrar o produto";
            $this->Flash->set($msg, ['element' => 'error']);
        }

        $this->redirect('/inicio');
 
    }

    public function apagar($id){    
        
        $produtosTable = TableRegistry::get('produtos');
        $produtos = $produtosTable->get($id);

        if ($produtosTable->delete($produtos)){
            $msg = "produto removido com sucesso";
            $this->Flash->set($msg, ['element' => 'error']);
        }else{
            $msg = "produto com problema";
            $this->Flash->set($msg);
        }

        

    $this->redirect('/inicio');
 
    }

    public function editar($id){
        $produtosTable = TableRegistry::get('produtos');
        $produtos = $produtosTable->get($id);
        $this->set('produtos', $produtos);
        $this->render('cadastro');
    }

 


}
?>