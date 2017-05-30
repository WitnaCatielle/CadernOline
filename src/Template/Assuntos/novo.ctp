<h1>Criar Assuntos</h1>

<?php
    echo $this->Form->create($assunto,['url' => ['action' => 'salva']]);
    echo $this->Form->input('id');
    echo $this->Form->input('nome');
    echo $this->Form->input('conteudo');
    echo $this->Form->button('Salvar');
    echo $this->Form->end();

?>