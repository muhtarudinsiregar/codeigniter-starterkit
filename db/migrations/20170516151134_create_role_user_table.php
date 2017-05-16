<?php

use Phinx\Migration\AbstractMigration;

class CreateRoleUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('role_user');
        $table->addColumn('role_id', 'integer')
           ->addColumn('user_id', 'integer')
           ->addColumn('created_at', 'timestamp', array('default' => 'CURRENT_TIMESTAMP'))
           ->addColumn('updated_at', 'timestamp', array('default' => 'CURRENT_TIMESTAMP'))
           ->addForeignKey('role_id', 'roles', 'id', ['delete' => 'CASCADE'])
           ->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE'])
           ->addIndex(array('id', 'role_id', 'user_id'))
           ->create();
    }
}
