<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Campaña Entity
 *
 * @property int $id
 * @property string $nombre
 * @property int $operadora_id
 * @property string $descripcion
 *
 * @property \App\Model\Entity\Operadora $operadora
 * @property \App\Model\Entity\Registrollamadascobranza[] $registrollamadascobranzas
 */
class Campaña extends Entity
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
        'nombre' => true,
        'operadora_id' => true,
        'descripcion' => true,
        'operadora' => true,
        'registrollamadascobranzas' => true,
    ];
}
