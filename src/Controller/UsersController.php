<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class UsersController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event); // TODO: Change the autogenerated stub

        $this->Auth->allow(['cadastrar','salvar']);
    }

    public function cadastrar() {

        $userTable = TableRegistry::get('Users');

        $user = $userTable->newEntity();

        $this->set('user',$user);
    }

    public function salvar() {

        $userTable = TableRegistry::get('Users');

        $user = $userTable->newEntity($this->request->data());

        if($userTable->save($user)) {
            $this->Flash->set('Usuario cadastrado com sucesso');
    }
    else {
        $this->Flash->set('Erro ao cadastrar o usuario');
    }

        $this->redirect('Users/cadastrar');
    }

    /**
     * @return \Cake\Http\Response|null
     */
    public function login(){

            if($this->request->is('post')){

            $user = $this->Auth->identify();

            if($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->set('Usuario ou senha invalidos',['element' => 'error']);
            }

        }

    }

    public function logout() {

        return $this->redirect($this->Auth->logout());

    }


}

?>