<table class="table">
    <tread>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Opções</th>
        </tr>
    </tread>
    <tbody>
        <?php
            foreach($instituicoes as $instituicao) {
        ?>
        <tr>
            <td><?= $instituicao['id']; ?></td>
            <td><?= $instituicao['nome']; ?></td>
            <td><?= $instituicao['telefone']; ?></td>
            <td>
                <?php
                echo $this->Html->Link('Alterar',['controller' => 'instituicoes','action' => 'alterar',$instituicao['id']]);
                ?>
                <?php
                echo $this->Form->postLink('Remover',['controller' => 'instituicoes','action' => 'remover',$instituicao['id']],['confirm' => 'Deseja remover a instituicao'.$instituicao['nome'] .'?']);
                 ?>
            </td>
        </tr>
        <?php
            }
       ?>
   </tbody>
</table>
<?php
    echo $this->Html->Link('Nova Instituicao',['controller' => 'instituicoes','action' => 'novo']);

    echo $this->Html->Link('Logout', ['controller' => 'Instituicoes','action' => 'logout']);
?>

