<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><?= $this->Html->link(__('Menu Inicio'), ['controller' => 'Item', 'action' => 'index']) ?></li>
        <br><br>
        <li class="heading"><?= __('Opções') ?></li>

        <li><?= $this->Html->link(__('Editar Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Item'), ['action' => 'delete', $item->id], ['confirm' => __('Deseja deletar o item ?', $item->id)]) ?> </li>


    </ul>
</nav>
<div class="item view large-10 medium-8 columns content">
    <h3><?= h($item->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Do Item') ?></th>
            <td><?= h($item->nome_do_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade De Medida') ?></th>
            <td><?= h($item->unidade_de_medida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($item->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($item->preco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data De Validade') ?></th>
            <td><?= h($item->data_de_validade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data De Fabricacao') ?></th>
            <td><?= h($item->data_de_fabricacao) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Produto Perecivel') ?></th>
            <td><?= $item->produto_perecivel ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
