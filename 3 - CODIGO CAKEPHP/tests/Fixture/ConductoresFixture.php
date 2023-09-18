<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConductoresFixture
 */
class ConductoresFixture extends TestFixture
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
                'id' => 1,
                'identificacion' => 1,
                'Nombre' => 'Lorem ipsum dolor sit a',
                'Apellido' => 'Lorem ipsum dolor sit a',
                'Direccion' => 'Lorem ipsum dolor sit a',
                'Telefono' => 'Lorem ipsum dolor ',
                'Edad' => 1,
                'Genero' => 'Lorem ip',
                'Correo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
