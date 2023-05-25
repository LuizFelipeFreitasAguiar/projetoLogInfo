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
 
        <li><?= $this->Html->link(__('Listar Itens'), ['action' => 'index']) ?></li>
      
      

    </ul>
</nav>
<div class="item form large-10 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Cadastrar Item') ?></legend>
        <?php
        echo $this->Form->control('nome_do_item', ['required' => true, 'maxlength' => 50]);
        echo $this->Form->control('unidade_de_medida', ['required' => true, 'options' => ['Litro' => 'Litro', 'Quilograma' => 'Quilograma', 'Unidade' => 'Unidade']]);
        echo $this->Form->control('quantidade', ['type' => 'number']);
        echo $this->Form->control('preco', ['required' => true, 'type' => 'number', 'prepend' => '$', 'step' => '0.01']);
        echo $this->Form->control('produto_perecivel', [
            'label' => 'Produto Perecível',
            'class' => 'produto-perecivel-checkbox',
            'onchange' => 'toggleDivVisibility(this)',
            ]) ;
        ?>

        <div class="dt_validade" style="display: <?= $item->produto_perecivel ? 'block' : 'none' ?>;">
            <label>Data Validade</label>
            <input type="date" id="data_de_validade" , name="data_de_validade">
        </div>

        <label>Data Fabricação</label>
        <input type="date" id="data_de_fabricacao" , name="data_de_fabricacao">
    

      

    </fieldset>
    <div style="position: absolute;right: 166px;">
        <?= $this->Form->button(__('Cancelar')) ?>
    </div>
    <div>
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>

<script>
    function toggleDivVisibility(checkbox) {
        var div = document.querySelector('.dt_validade');

        if (checkbox.checked) {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    }
</script>