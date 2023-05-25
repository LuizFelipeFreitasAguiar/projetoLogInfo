<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa[]|\Cake\Collection\CollectionInterface $pessoa
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><?= $this->Html->link(__('Menu Inicio'), ['controller' => 'Item', 'action' => 'index']) ?></li>
        <br><br>
        <h4 style="color:#1798A5">Vendas</h4>
        
        <li><?= $this->Html->link(__('Nova Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?> </li>
        <h4 style="color:#1798A5">Pessoa</h4>
        <li><?= $this->Html->link(__('Nova Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <h4 style="color:#1798A5">Item</h4>
        <li><?= $this->Html->link(__('Novo Item'), ['controller' => 'Item', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Item'), ['controller' => 'Item', 'action' => 'index']) ?></li>

    </ul>
</nav>
<div class="pessoa index large-10 medium-8 columns content">
    <h3><?= __('Pessoa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoa as $pessoa): ?>
            <tr>
                <td><?= $this->Number->format($pessoa->id) ?></td>
                <td><?= h($pessoa->nome) ?></td>
                <td><?= h($pessoa->email) ?></td>
                <td><?= h($pessoa->telefone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Exibir'), ['action' => 'view', $pessoa->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pessoa->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Deseja realmente exluir ?', $pessoa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('última')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('anterior') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')]) ?></p>
    </div>
</div>
