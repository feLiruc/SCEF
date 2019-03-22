<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Philanthropicentity Entity
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string $email
 * @property string $telephone
 * @property string|null $whatsapp
 * @property string $address1
 * @property string|null $address2
 * @property string $zipcode
 * @property string $city
 * @property string $state
 * @property int $user_id
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Philanthropicentity extends Entity
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
        'image' => true,
        'description' => true,
        'email' => true,
        'telephone' => true,
        'whatsapp' => true,
        'address1' => true,
        'address2' => true,
        'zipcode' => true,
        'city' => true,
        'state' => true,
        'user_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
