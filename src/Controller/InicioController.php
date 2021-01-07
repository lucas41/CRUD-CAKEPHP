<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;


class InicioController extends AppController
{


    public function index(){

        $key = $this->request->getQuery('key');

        $ProdutosTable= TableRegistry::get('produtos');
        if(empty($key)){
        $produtos = $ProdutosTable->find('all');
        }else{
            $produtos = $ProdutosTable->find('all', [
            'conditions' => ['or'=>['produtos.Nome like'=>'%'.$key.'%','produtos.descricao like'=>'%'.$key.'%']]
            ]);
        }
        $this->set('produtos', $produtos);
            
    }


    public function jogo(){
        $ProdutosTable= TableRegistry::get('produtos');  
        $produtos = $ProdutosTable->find('all', [
        'conditions' => ['produtos.tipo' => 0]
        ]);
        $this->set('produtos', $produtos);
        $this->render('index');
    }

    public function livro(){
        $ProdutosTable= TableRegistry::get('produtos');  
        $produtos = $ProdutosTable->find('all', [
        'conditions' => ['produtos.tipo' => 1]
        ]);
        $this->set('produtos', $produtos);
        $this->render('index');
    }

    public function filme(){
        $ProdutosTable= TableRegistry::get('produtos');  
        $produtos = $ProdutosTable->find('all',[
            'conditions' => ['produtos.tipo' => 2]
            ]);
        $this->set('produtos', $produtos);
        $this->render('index');
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
        
        $image = $this->request->getData()['image_file'];

      
        $name = $image->getclientFilename();
        
        $targetPath = WWW_ROOT.'image'.DS.$name;
        $image->moveTo($targetPath);
        $dados['image'] = $name;


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

    public function teste($id){
        $produtosTable = TableRegistry::get('produtos');
        $produtos = $produtosTable->get($id);
        $this->set('produtos', $produtos);
        $this->render('teste');
    }




}
?>