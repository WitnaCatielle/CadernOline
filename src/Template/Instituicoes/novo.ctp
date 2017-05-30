<h1>Cadastrar Instituição</h1>

<?php
    echo $this->Form->create($instituicao,['url' => ['action' => 'salva']]);
    echo $this->Form->input('id');
    echo $this->Form->input('nome');
    echo $this->Form->input('telefone');
    echo $this->Form->button('Salvar');
    echo $this->Form->end();

?>