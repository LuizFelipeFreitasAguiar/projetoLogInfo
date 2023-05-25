<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
    <li><?= $this->Html->link(__('Menu Inicio'), ['controller' => 'Item', 'action' => 'index']) ?></li>
        <br><br>
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar Venda'), ['action' => 'edit', $venda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Deseja realmente excluir ?', $venda->id)]) ?> </li>


    </ul>
</nav>
<div class="vendas view large-10 medium-8 columns content">
    <h3><?= h($venda->id) ?></h3>
    <table class="vertical-table">
         <tr hidden>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($venda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pessoa') ?></th>
            <td><?= $venda->has('pessoa') ?  $venda->pessoa->nome : '' ?></td>        </tr>
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $venda->has('item') ? $venda->item->nome_do_item: '' ?></td>        </tr>
       
        <tr>
            <th scope="row"><?= __('Venda Preco') ?></th>
            <td><?= $this->Number->format($venda->venda_preco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Venda Data') ?></th>
            <td><?= h($venda->venda_data) ?></td>
        </tr>
    </table>
</div>
