<?php
use Migrations\AbstractMigration;

class CreateItem extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('item');
        $table->addColumn('nome_do_item', 'string', ['limit' => 255])
              ->addColumn('unidade_de_medida', 'string', ['limit' => 255])
              ->addColumn('quantidade', 'integer')
              ->addColumn('preco', 'decimal', ['precision' => 8, 'scale' => 2])
              ->addColumn('produto_perecivel', 'boolean', ['default' => false])
              ->addColumn('data_de_validade', 'date', ['null' => true])
              ->addColumn('data_de_fabricacao', 'date', ['null' => true])
              ->addTimestamps()
              ->create();
    }
}