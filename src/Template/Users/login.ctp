<?php
    echo $this->Flash->render('auth');
?>
<h1>Acesso ao sistema</h1>
<?php
    echo $this->Form->create();
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->button('Entrar');
    echo $this->Form->end();
?>