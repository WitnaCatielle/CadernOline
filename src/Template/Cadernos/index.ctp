<table class="table">
    <tread>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Opções</th>
        </tr>
    </tread>
    <tbody>
        <?php
            foreach($cadernos as $caderno) {
        ?>
        <tr>
            <td><?= $caderno['id']; ?></td>
            <td><?= $caderno['nome']; ?></td>
            <td><?= $caderno['curso']; ?></td>
            <td>
                <?php
                echo $this->Html->Link('Alterar',['controller' => 'cadernos','action' => 'alterar',$caderno['id']]);
                ?>
                <?php
                echo $this->Form->PostLink('Remover',['controller' => 'cadernos','action' => 'remover',$caderno['id']],['confirm' => 'Deseja remover o caderno'.$caderno['nome'] .'?']);
                 ?>
            </td>
        </tr>
        <?php
            }
       ?>
   </tbody>
</table>
<?php
    echo $this->Html->Link('Novo Caderno',['controller' => 'cadernos','action' => 'novo']);
?>

