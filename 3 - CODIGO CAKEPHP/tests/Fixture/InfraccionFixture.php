<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfraccionFixture
 */
class InfraccionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'infraccion';
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
                'Tipo_Infraccion' => 'Lorem ipsum dolor sit amet',
                'N_Infraccion' => 'Lorem ipsum dolor sit amet',
                'Hora' => '13:14:23',
                'Fecha' => '2023-06-02',
                'Lugar' => 'Lorem ipsum dolor sit amet',
                'Valor' => 'Lorem ipsum dolor sit amet',
                'Descripcion' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
