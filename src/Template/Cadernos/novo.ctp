<?php
    echo $this->Form->create($caderno,['url' => ['action' => 'salva']]);
    echo $this->Form->input('id');
    echo $this->Form->input('nome');
    echo $this->Form->input('curso');
    echo $this->Form->button('Salvar');

    echo $this->Form->end();

?>