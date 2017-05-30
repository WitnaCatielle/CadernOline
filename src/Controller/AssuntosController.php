<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class AssuntosController extends AppController {

    public function index(){

        $assuntosTable = TableRegistry::get('Assuntos');
        $assuntos = $assuntosTable->find('all');
        $this->set('assuntos',$assuntos);

    }

    public function novo() {

        $assuntosTable = TableRegistry::get('Assuntos');
        $assunto = $assuntosTable->newEntity();
        $this->set('assuntos',$assunto);

    }

    public function alterar($id) {

        $assuntosTable = TableRegistry::get('Assuntos');

        $assunto = $assuntosTable->get($id);



        $this->set('assunto', $assunto);

        $this->render('novo');

    }

    public function remover($id) {

        $assuntosTable = TableRegistry::get('Assuntos');

        $assunto = $assuntosTable->get($id);

        if ($assuntosTable->delete($assunto)){
            $msg = "Assunto removido com sucesso";
            $this->Flash->set($msg,['element'=>'error']);
        }else {
            $msg = "Erro ao remover assunto";
            $this->Flash->set($msg);
        }

        $this->redirect('assuntos/index');

    }

    public function salva() {

        $assuntosTable = TableRegistry::get('Assuntos');

        $assunto = $assuntosTable->newEntity($this->request->data());

        if ($assuntosTable->save($assunto)) {
            $msg = "Assunto cadastrado com sucesso";
            $this->Flash->set($msg,['element'=>'success']);
        }else {
            $msg = "Erro ao cadastrar o assunto";
            $this->Flash->set($msg,['element'=>'error']);
        }
        $this->redirect('Assuntos/index');
    }
}


?>