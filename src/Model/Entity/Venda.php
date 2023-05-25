<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property int $pessoa_id
 * @property int $item_id
 * @property \Cake\I18n\FrozenDate $venda_data
 * @property float $venda_preco
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 * @property \App\Model\Entity\Item $item
 */
class Venda extends Entity
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
        'pessoa_id' => true,
        'item_id' => true,
        'venda_data' => true,
        'venda_preco' => true,
        'pessoa' => true,
        'item' => true,
    ];
}
