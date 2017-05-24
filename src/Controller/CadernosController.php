<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class CadernosController extends AppController {

    public function index() {

        $cadernosTable = TableRegistry::get('Cadernos');
        $cadernos = $cadernosTable->find('all');
        $this->set('cadernos',$cadernos);
    }

    public function novo(){

        $cadernosTable = TableRegistry::get('Cadernos');

        $caderno = $cadernosTable->newEntity();

        $this->set('caderno',$caderno);

    }

    public function alterar($id) {

        $cadernosTable = TableRegistry::get('Cadernos');

        $caderno = $cadernosTable->get($id);

        $this->set('caderno', $caderno);

        $this->render('novo');

        }

    public function remover($id) {

        $cadernosTable = TableRegistry::get('Cadernos');

        $caderno = $cadernosTable->get($id);

        if ($cadernosTable->delete($caderno)){
            $msg = "Caderno removido com sucesso";
            $this->Flash->set($msg,['element'=>'error']);
        }else {
            $msg = "Erro ao remover caderno";
            $this->Flash->set($msg);
        }

        $this->redirect('cadernos/index');

    }

    public function salva() {

        $cadernosTable = TableRegistry::get('Cadernos');

        $caderno = $cadernosTable->newEntity($this->request->data());

        if ($cadernosTable->save($caderno)) {
            $msg = "Caderno cadastrado com sucesso";
            $this->Flash->set($msg,['element'=>'success']);
        }else {
            $msg = "Erro ao cadastrar o caderno";
            $this->Flash->set($msg,['element'=>'error']);
        }
        $this->redirect('Cadernos/index');
    }


}

?>
