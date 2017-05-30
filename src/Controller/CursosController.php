<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class CursosController extends AppController {

    public function index() {

        $cursosTable = TableRegistry::get('Cursos');
        $cursos = $cursosTable->find('all');
        $this->set('cursos',$cursos);
    }

    public function novo(){

        $cursosTable = TableRegistry::get('Cursos');

        $curso = $cursosTable->newEntity();

        $this->set('curso',$curso);

    }

    public function alterar($id) {

        $cursosTable = TableRegistry::get('Cursos');

        $curso = $cursosTable->get($id);



        $this->set('curso', $curso);

        $this->render('novo');

    }

    public function remover($id) {

        $cursosTable = TableRegistry::get('Cursos');

        $curso = $cursosTable->get($id);

        if ($cursosTable->delete($curso)){
            $msg = "Curso removido com sucesso";
            $this->Flash->set($msg,['element'=>'error']);
        }else {
            $msg = "Erro ao remover curso";
            $this->Flash->set($msg);
        }

        $this->redirect('cursos/index');

    }

    public function salva() {

        $cursosTable = TableRegistry::get('Cursos');

        $curso = $cursosTable->newEntity($this->request->data());

        if ($cursosTable->save($curso)) {
            $msg = "Curso cadastrado com sucesso";
            $this->Flash->set($msg,['element'=>'success']);
        }else {
            $msg = "Erro ao cadastrar o curso";
            $this->Flash->set($msg,['element'=>'error']);
        }
        $this->redirect('Ccursos/index');
    }


}

?>
