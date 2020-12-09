<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property \Cake\I18n\FrozenDate|null $fechainicio
 * @property \Cake\I18n\FrozenDate|null $fechafin
 * @property int $estadopago_id
 * @property int $operadora_id
 * @property int $producto_id
 * @property string $descripcion
 * @property int $user_id
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Estadopago $estadopago
 * @property \App\Model\Entity\Operadora $operadora
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Registrollamadascobranza[] $registrollamadascobranzas
 */
class Contrato extends Entity
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
        'cliente_id' => true,
        'fechainicio' => true,
        'fechafin' => true,
        'estadopago_id' => true,
        'operadora_id' => true,
        'producto_id' => true,
        'descripcion' => true,
        'user_id' => true,
        'cliente' => true,
        'estadopago' => true,
        'operadora' => true,
        'producto' => true,
        'user' => true,
        'registrollamadascobranzas' => true,
    ];
}
