<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conductore Entity
 *
 * @property int $id
 * @property int $identificacion
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Direccion
 * @property string $Telefono
 * @property int $Edad
 * @property string $Genero
 * @property string $Correo
 */
class Conductore extends Entity
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
        'identificacion' => true,
        'Nombre' => true,
        'Apellido' => true,
        'Direccion' => true,
        'Telefono' => true,
        'Edad' => true,
        'Genero' => true,
        'Correo' => true,
    ];
}
