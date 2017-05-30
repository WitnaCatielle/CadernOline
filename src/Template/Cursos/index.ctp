<table class="table">
    <tread>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Opções</th>
        </tr>
    </tread>
    <tbody>
        <?php
            foreach($cursos as $curso) {
        ?>
        <tr>
            <td><?= $curso['id']; ?></td>
            <td><?= $curso['nome']; ?></td>
            <td>
                <?php
                echo $this->Html->Link('Alterar',['controller' => 'cursos','action' => 'alterar',$curso['id']]);
                ?>
                <?php
                echo $this->Form->postLink('Remover',['controller' => 'cursos','action' => 'remover',$curso['id']],['confirm' => 'Deseja remover o curso'.$curso['nome'] .'?']);
                 ?>
            </td>
        </tr>
        <?php
            }
       ?>
   </tbody>
</table>
<?php
    echo $this->Html->Link('Novo Curso',['controller' => 'cursos','action' => 'novo']);

    echo $this->Html->Link('Logout', ['controller' => 'Cursos','action' => 'logout']);
?>

