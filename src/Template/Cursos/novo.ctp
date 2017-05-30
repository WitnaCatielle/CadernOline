<h1>Cadastrar Curso</h1>

<?php
    echo $this->Form->create($curso,['url' => ['action' => 'salva']]);
    echo $this->Form->input('id');
    echo $this->Form->input('nome');
    echo $this->Form->button('Salvar');
    echo $this->Form->end();

?>