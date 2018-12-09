<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Record Entity
 *
 * @property int $recordID
 * @property string $size
 * @property int $status
 * @property int $id
 * @property int $itemID
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Record extends Entity
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
        'size' => true,
        'status' => true,
        'id' => true,
        'itemID' => true,
        'created' => true,
        'modified' => true
    ];
}
