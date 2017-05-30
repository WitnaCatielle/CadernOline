<table class="table">
    <tread>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Conteúdo</th>
            <th>Opções</th>
        </tr>
    </tread>
    <tbody>
        <?php
            foreach($assuntos as $assunto) {
        ?>
        <tr>
            <td><?= $assunto['id']; ?></td>
            <td><?= $assunto['nome']; ?></td>
            <td><?= $assunto['conteudo']; ?></td>
            <td>
                <?php
                echo $this->Html->Link('Alterar',['controller' => 'assuntos','action' => 'alterar',$assunto['id']]);
                ?>
                <?php
                echo $this->Form->postLink('Remover',['controller' => 'assuntos','action' => 'remover',$assunto['id']],['confirm' => 'Deseja remover o assunto'.$assunto['nome'] .'?']);
                 ?>
            </td>
        </tr>
        <?php
            }
       ?>
   </tbody>
</table>
<?php
    echo $this->Html->Link('Novo Assunto',['controller' => 'assuntos','action' => 'novo']);

    echo $this->Html->Link('Logout', ['controller' => 'Users','action' => 'logout']);
?>

