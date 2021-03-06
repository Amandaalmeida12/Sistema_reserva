<?php
namespace App\Model\Entity;
use Cake\Event\Event;
use  Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $login
 * @property string $password
 * @property string $role
 *
 * @property \App\Model\Entity\Reserve[] $reserves
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
        'name' => true,
        'login' => true,
        'password' => true,
        'role' => true,
        'reserves' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    protected function _setPassword($password){
            return(new DefaultPasswordHasher)->hash($password);         
        
    }
}
