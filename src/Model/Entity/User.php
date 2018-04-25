<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $prefecture_id
 * @property string $sex
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 * @property string $short_profile
 *
 * @property \App\Model\Entity\Prefecture $prefecture
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'prefecture_id' => true,
        'sex' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'prefecture' => true
    ];

    public function sexList()
    {
        return [
            '男性' => '男性',
            '女性' => '女性',
            '不明' => '不明'
        ];
    }

//    protected function _getShortProfile()
//    {
//        return sprintf('%s %s(%s)', $this->last_name, $this->first_name, $this->sex);
//    }
}
