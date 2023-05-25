<?php
use Cake\View\Helper\TimeHelper;

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda[]|\Cake\Collection\CollectionInterface $vendas
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><?= $this->Html->link(__('Menu Inicio'), ['controller' => 'Item', 'action' => 'index']) ?></li>
        <br><br>
        <h4 style="color:#1798A5">Vendas</h4>
        <li><?= $this->Html->link(__('Nova Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Relatorio Vendas'), ['controller' => 'Vendas', 'action' => 'relatorioPeriodo']) ?></li>

        <h4 style="color:#1798A5">Pessoa</h4>
        <li><?= $this->Html->link(__('Nova Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <h4 style="color:#1798A5">Item</h4>
        <li><?= $this->Html->link(__('Novo Item'), ['controller' => 'Item', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Item'), ['controller' => 'Item', 'action' => 'index']) ?></li>


    </ul>
</nav>
<div class="vendas index large-10 medium-8 columns content">
    <h3><?= __('Vendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('venda_data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('venda_preco') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
            <tr>
                <td><?= $this->Number->format($venda->id) ?></td>
                <td><?= $venda->has('pessoa') ?  $venda->pessoa->nome : '' ?></td>
                <td><?= $venda->has('item') ? $venda->item->nome_do_item: '' ?></td>
                <td><?= $this->Time->format($venda->venda_data, 'dd/MM/yyyy') ?></td>
                <td><?= $this->Number->format($venda->venda_preco) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Exibir'), ['action' => 'view', $venda->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $venda->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $venda->id], ['confirm' => __('Deseja realmente excluir ?', $venda->id)]) ?>
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
