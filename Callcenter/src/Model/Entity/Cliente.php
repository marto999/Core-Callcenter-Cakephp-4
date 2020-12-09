<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $email
 * @property string $telfconvencional
 * @property string $telfmovil
 * @property string $direccion
 * @property int $ciudade_id
 *
 * @property \App\Model\Entity\Ciudade $ciudade
 * @property \App\Model\Entity\Contrato[] $contratos
 */
class Cliente extends Entity
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
        'email' => true,
        'telfconvencional' => true,
        'telfmovil' => true,
        'direccion' => true,
        'ciudade_id' => true,
        'ciudade' => true,
        'contratos' => true,
    ];
}
