<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class InstituicoesController extends AppController {

    public function index() {

        $instituicoesTable = TableRegistry::get('Instituicoes');
        $instituicoes = $instituicoesTable->find('all');
        $this->set('instituicoes',$instituicoes);
    }

    public function novo(){

        $instituicoesTable = TableRegistry::get('Cadernos');

        $instituicao = $instituicoesTable->newEntity();

        $this->set('instituicao',$instituicao);

    }

    public function alterar($id) {

        $instituicoesTable = TableRegistry::get('Instituicoes');

        $instituicao = $instituicoesTable->get($id);



        $this->set('instituicao', $instituicao);

        $this->render('novo');

    }

    public function remover($id) {

        $instituicoesTable = TableRegistry::get('Instituicoes');

        $instituicao = $instituicoesTable->get($id);

        if ($instituicoesTable->delete($instituicao)){
            $msg = "Instituicao removida com sucesso";
            $this->Flash->set($msg,['element'=>'error']);
        }else {
            $msg = "Erro ao remover instituicao";
            $this->Flash->set($msg);
        }

        $this->redirect('Instituicoes/index');

    }

    public function salva() {

        $instituicoesTable = TableRegistry::get('Instituicoes');

        $instituicao = $instituicoesTable->newEntity($this->request->data());

        if ($instituicoesTable->save($instituicao)) {
            $msg = "Instituicao cadastrada com sucesso";
            $this->Flash->set($msg,['element'=>'success']);
        }else {
            $msg = "Erro ao cadastrar a instituicao";
            $this->Flash->set($msg,['element'=>'error']);
        }
        $this->redirect('Instituicoes/index');
    }


}

?>
