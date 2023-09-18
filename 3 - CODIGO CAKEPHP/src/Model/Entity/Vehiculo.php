<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehiculo Entity
 *
 * @property int $Id
 * @property string $Tipo_de_Vehiculo
 * @property string $Color
 * @property string $Marca
 * @property string $Modelo
 * @property string $Estado
 * @property string $Placa
 * @property string $Chasis
 * @property string $Numero_Motor
 * @property string $Kilometraje
 */
class Vehiculo extends Entity
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
        'Tipo_de_Vehiculo' => true,
        'Color' => true,
        'Marca' => true,
        'Modelo' => true,
        'Estado' => true,
        'Placa' => true,
        'Chasis' => true,
        'Numero_Motor' => true,
        'Kilometraje' => true,
    ];
}
