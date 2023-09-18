<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conductores Model
 *
 * @method \App\Model\Entity\Conductore newEmptyEntity()
 * @method \App\Model\Entity\Conductore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Conductore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conductore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conductore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Conductore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conductore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conductore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conductore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conductore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conductore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conductore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conductore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ConductoresTable extends Table
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

        $this->setTable('conductores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('identificacion')
            ->requirePresence('identificacion', 'create')
            ->notEmptyString('identificacion');

        $validator
            ->scalar('Nombre')
            ->maxLength('Nombre', 25)
            ->requirePresence('Nombre', 'create')
            ->notEmptyString('Nombre');

        $validator
            ->scalar('Apellido')
            ->maxLength('Apellido', 25)
            ->requirePresence('Apellido', 'create')
            ->notEmptyString('Apellido');

        $validator
            ->scalar('Direccion')
            ->maxLength('Direccion', 25)
            ->requirePresence('Direccion', 'create')
            ->notEmptyString('Direccion');

        $validator
            ->scalar('Telefono')
            ->maxLength('Telefono', 20)
            ->requirePresence('Telefono', 'create')
            ->notEmptyString('Telefono');

        $validator
            ->integer('Edad')
            ->requirePresence('Edad', 'create')
            ->notEmptyString('Edad');

        $validator
            ->scalar('Genero')
            ->maxLength('Genero', 10)
            ->requirePresence('Genero', 'create')
            ->notEmptyString('Genero');

        $validator
            ->scalar('Correo')
            ->maxLength('Correo', 30)
            ->requirePresence('Correo', 'create')
            ->notEmptyString('Correo');

        return $validator;
    }
}
