<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $nome_do_item
 * @property string $unidade_de_medida
 * @property int $quantidade
 * @property float $preco
 * @property bool $produto_perecivel
 * @property \Cake\I18n\FrozenDate|null $data_de_validade
 * @property \Cake\I18n\FrozenDate|null $data_de_fabricacao
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 */
class Item extends Entity
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
        'nome_do_item' => true,
        'unidade_de_medida' => true,
        'quantidade' => true,
        'preco' => true,
        'produto_perecivel' => true,
        'data_de_validade' => true,
        'data_de_fabricacao' => true,
        'created_at' => true,
        'updated_at' => true,
    ];
}
