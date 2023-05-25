<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $item->id],
                ['confirm' => __('Deseja deletar o item ?', $item->id)]
            )
        ?></li>
          <li><?= $this->Html->link(__('Menu Inicio'), ['controller' => 'Item', 'action' => 'index']) ?></li>
        <br><br>
        <li><?= $this->Html->link(__('Listar Itens'), ['action' => 'index']) ?></li>
     

    </ul>
</nav>
<div class="item form large-10 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Editar Item') ?></legend>
        <?php
            echo $this->Form->control('nome_do_item');
            echo $this->Form->control('unidade_de_medida');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('preco');
            echo $this->Form->control('produto_perecivel');
            echo $this->Form->control('data_de_validade', ['empty' => true]);
            echo $this->Form->control('data_de_fabricacao', ['empty' => true]);

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
