<?php
use Migrations\AbstractMigration;

class CreatePessoa extends AbstractMigration
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
        $table = $this->table('pessoa');
        $table->addColumn('nome', 'string')
            ->addColumn('cpf', 'text')
            ->addColumn('email', 'string')
            ->addColumn('telefone', 'string')
            ->create();
    }
}
