<!-- relatorio_periodo.ctp -->
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

<h2>Relatório de Vendas por Período</h2>

<?= $this->Form->create(null, ['url' => ['controller' => 'Vendas', 'action' => 'relatorioPeriodo']]) ?>
<?= $this->Form->input('data_inicio', ['label' => 'Data de Início', 'type' => 'date']) ?>
<?= $this->Form->input('data_fim', ['label' => 'Data de Fim', 'type' => 'date']) ?>
<?= $this->Form->button('Filtrar') ?>
<?= $this->Form->end() ?>

<?php if (empty($vendas)): ?>
    <h3>Vendas encontradas:</h3>
    <table>
        <thead>
            <tr>
                <th>Comprador</th>
                <th>Vendedor</th>
                <th>Data da Venda</th>
                <th>Item</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
                <tr>
                    <td><?= $venda->pessoa->nome ?></td>
                    <td><?= $venda->data_venda->format('d/m/Y') ?></td>
                    <td><?= $venda->item->nome_do_item ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
