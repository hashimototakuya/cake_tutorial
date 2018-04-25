<?php
namespace App\Shell;

use App\Model\Entity\User;
use App\Model\Table\UsersTable;
use Cake\Console\Shell;
use Cake\ORM\TableRegistry;

/**
 * ShowUsers shell command.
 * @property UsersTable $Users
 */
class ShowUsersShell extends Shell
{
    public function main()
    {
        /**
         * @var User[] $users
         */
        $users = $this->Users->find()
            ->toArray();

        foreach ($users as $user) {
            $this->hr();
            $this->out($user->last_name.' '.$user->first_name);
            $this->err($user->sex);
        }
    }

    public function initialize()
    {
        parent::initialize();
        $this->Users = TableRegistry::get('Users');
    }

    public function getOptionParser()
    {
        $parser = parent::getOptionParser();

        return $parser;
    }
}
