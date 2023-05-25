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
        <li><?= $this->Html->link(__('Listar Vendas'), ['action' => 'index']) ?></li>


    </ul>
</nav>
<div class="vendas form large-10 medium-8 columns content">
    <?= $this->Form->create($venda) ?>
    <fieldset>
        <legend><?= __('Nova venda') ?></legend>
        <?php




        echo $this->Form->control('pessoa_id', ['options' => $pessoa]);
        echo $this->Form->control('item_id', ['options' => $item, 'value' => 'id']);
        ?>
           <input type="date" id="venda_data", name="venda_data">
        <?php
        echo $this->Form->control('venda_preco');
        ?>
    </fieldset>
    <div style="position: absolute;right: 166px;">
        <?= $this->Form->button(__('Cancelar')) ?>
    </div>
    <div>
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>