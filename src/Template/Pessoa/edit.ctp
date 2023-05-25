<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $pessoa->id],
                ['confirm' => __('Deseja realmente excluir ?', $pessoa->id)]
            )
        ?></li>
          <li><?= $this->Html->link(__('Menu Inicio'), ['controller' => 'Item', 'action' => 'index']) ?></li>
        <br><br>
        <li><?= $this->Html->link(__('Listar Pessoa'), ['action' => 'index']) ?></li>


    </ul>
</nav>
<div class="pessoa form large-10 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Editar Pessoa') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cpf');
            echo $this->Form->control('email');
            echo $this->Form->control('telefone');
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
