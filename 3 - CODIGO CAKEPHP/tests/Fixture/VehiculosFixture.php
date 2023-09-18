<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VehiculosFixture
 */
class VehiculosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id' => 1,
                'Tipo_de_Vehiculo' => 'Lorem ips',
                'Color' => 'Lorem ipsum dolor sit a',
                'Marca' => 'Lorem ipsum dolor sit a',
                'Modelo' => 'Lorem ipsum dolor sit amet',
                'Estado' => 'Lorem ipsum dolor sit amet',
                'Placa' => 'Lore',
                'Chasis' => 'Lorem ipsum dolor sit amet',
                'Numero_Motor' => 'Lorem ipsum dolor sit amet',
                'Kilometraje' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
