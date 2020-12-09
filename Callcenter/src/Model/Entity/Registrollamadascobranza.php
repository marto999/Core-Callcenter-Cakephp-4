<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registrollamadascobranza Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $fecha_llamada
 * @property string $descripcion
 * @property int $contrato_id
 * @property int $callcenter_id
 * @property int $campaña_id
 * @property int $respuesta_id
 * @property int $script_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 * @property \App\Model\Entity\Callcenter $callcenter
 * @property \App\Model\Entity\Campaña $campaña
 * @property \App\Model\Entity\Respuesta $respuesta
 * @property \App\Model\Entity\Script $script
 */
class Registrollamadascobranza extends Entity
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
        'fecha_llamada' => true,
        'descripcion' => true,
        'contrato_id' => true,
        'callcenter_id' => true,
        'campaña_id' => true,
        'respuesta_id' => true,
        'script_id' => true,
        'contrato' => true,
        'callcenter' => true,
        'campaña' => true,
        'respuesta' => true,
        'script' => true,
    ];
}
