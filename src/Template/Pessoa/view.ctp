<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><?= $this->Html->link(__('Menu Inicio'), ['controller' => 'Item', 'action' => 'index']) ?></li>
        <br><br>
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar Pessoa'), ['action' => 'edit', $pessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Deseja realmente excluir ?', $pessoa->id)]) ?> </li>

    </ul>
</nav>
<div class="pessoa view large-10 medium-8 columns content">
    <h3><?= h($pessoa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($pessoa->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($pessoa->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($pessoa->cpf) ?></td>
        </tr>
    </table>

  
    </div>
</div>
