<?php
use Cake\View\Helper\TimeHelper;

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $item
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
<div class="item index large-10 medium-8 columns content">
    <h3><?= __('Item') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_do_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidade_de_medida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produto_perecivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_de_validade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_de_fabricacao') ?></th>

                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($item as $item): ?>
            <tr>
                <td><?= $this->Number->format($item->id) ?></td>
                <td><?= h($item->nome_do_item) ?></td>
                <td><?= h($item->unidade_de_medida) ?></td>
                <td><?= $this->Number->format($item->quantidade) ?></td>
                <td><?= $this->Number->format($item->preco) ?></td>
                <td><?= h($item->produto_perecivel) ?></td>
                <td><?= $this->Time->format($item->data_de_validade, 'dd/MM/yyyy') ?></td>
                <td><?= $this->Time->format($item->data_de_fabricacao, 'dd/MM/yyyy') ?></td>


                <td class="actions">
                    <?= $this->Html->link(__('Exibir'), ['action' => 'view', $item->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $item->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $item->id], ['confirm' => __('Deseja realmente excluir ?', $item->id)]) ?>
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
