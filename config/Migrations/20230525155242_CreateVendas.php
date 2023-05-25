<?php
use Migrations\AbstractMigration;

class CreateVendas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        
        $table = $this->table('vendas');
        $table->addColumn('pessoa_id', 'integer')
            ->addColumn('item_id', 'integer')
            ->addColumn('venda_data', 'date')
            ->addColumn('venda_preco', 'decimal', ['precision' => 10, 'scale' => 2])
            ->addForeignKey('pessoa_id', 'pessoa', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('item_id', 'item', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->create();
    
    }
}
