<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infraccion Entity
 *
 * @property int $Id
 * @property string $Tipo_Infraccion
 * @property string $N_Infraccion
 * @property \Cake\I18n\Time $Hora
 * @property \Cake\I18n\FrozenDate $Fecha
 * @property string $Lugar
 * @property string $Valor
 * @property string $Descripcion
 */
class Infraccion extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'Tipo_Infraccion' => true,
        'N_Infraccion' => true,
        'Hora' => true,
        'Fecha' => true,
        'Lugar' => true,
        'Valor' => true,
        'Descripcion' => true,
    ];
}
