<?php
use Migrations\AbstractMigration;

class AddUser extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('users')
            ->addColumn('first_name', 'string', [
                'null' => false,
                'comment' => '名'
            ])->addColumn('last_name', 'string', [
                'null' => false,
                'comment' => '姓'
            ])->addColumn('prefecture_id', 'integer', [
                'null' => false,
                'comment' => '都道府県ID',
            ])->addColumn('sex', 'enum', [
                'values' => ['男性', '女性', '不明'],
                'comment' => '性別'
            ])->addColumn('created', 'datetime', [
                'default' => null,
                'null' => false,
                'comment' => '作成日時',
            ])->addColumn('modified', 'datetime', [
                'default' => null,
                'null' => false,
                'comment' => '編集日時',
            ])->addColumn('deleted', 'timestamp', [
                'default' => null,
                'null' => true,
                'comment' => '削除日時'
            ])->create();
    }
}
