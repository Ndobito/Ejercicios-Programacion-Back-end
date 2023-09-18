<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vehiculos Model
 *
 * @method \App\Model\Entity\Vehiculo newEmptyEntity()
 * @method \App\Model\Entity\Vehiculo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vehiculo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vehiculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vehiculo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vehiculo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vehiculo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vehiculo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vehiculo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VehiculosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('vehiculos');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Tipo_de_Vehiculo')
            ->maxLength('Tipo_de_Vehiculo', 11)
            ->requirePresence('Tipo_de_Vehiculo', 'create')
            ->notEmptyString('Tipo_de_Vehiculo');

        $validator
            ->scalar('Color')
            ->maxLength('Color', 25)
            ->requirePresence('Color', 'create')
            ->notEmptyString('Color');

        $validator
            ->scalar('Marca')
            ->maxLength('Marca', 25)
            ->requirePresence('Marca', 'create')
            ->notEmptyString('Marca');

        $validator
            ->scalar('Modelo')
            ->maxLength('Modelo', 30)
            ->requirePresence('Modelo', 'create')
            ->notEmptyString('Modelo');

        $validator
            ->scalar('Estado')
            ->maxLength('Estado', 50)
            ->requirePresence('Estado', 'create')
            ->notEmptyString('Estado');

        $validator
            ->scalar('Placa')
            ->maxLength('Placa', 6)
            ->requirePresence('Placa', 'create')
            ->notEmptyString('Placa');

        $validator
            ->scalar('Chasis')
            ->maxLength('Chasis', 28)
            ->requirePresence('Chasis', 'create')
            ->notEmptyString('Chasis');

        $validator
            ->scalar('Numero_Motor')
            ->maxLength('Numero_Motor', 28)
            ->requirePresence('Numero_Motor', 'create')
            ->notEmptyString('Numero_Motor');

        $validator
            ->scalar('Kilometraje')
            ->maxLength('Kilometraje', 50)
            ->requirePresence('Kilometraje', 'create')
            ->notEmptyString('Kilometraje');

        return $validator;
    }
}
