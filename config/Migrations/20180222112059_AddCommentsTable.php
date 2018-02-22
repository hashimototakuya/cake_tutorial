<?php
use Migrations\AbstractMigration;

class AddCommentsTable extends AbstractMigration
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
        $this->table('comments')
            ->addColumn('name', 'string', [
                'default' => null,
                'null' => false,
                'comment' => '名前'
            ])->addColumn('comment_text', 'text', [
                'default' => null,
                'null' => false,
                'comment' => 'コメント'
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
