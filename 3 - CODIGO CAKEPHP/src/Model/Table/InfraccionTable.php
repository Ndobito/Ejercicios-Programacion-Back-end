<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infraccion Model
 *
 * @method \App\Model\Entity\Infraccion newEmptyEntity()
 * @method \App\Model\Entity\Infraccion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infraccion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infraccion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infraccion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infraccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infraccion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infraccion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infraccion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infraccion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infraccion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infraccion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infraccion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InfraccionTable extends Table
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

        $this->setTable('infraccion');
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
            ->scalar('Tipo_Infraccion')
            ->maxLength('Tipo_Infraccion', 30)
            ->requirePresence('Tipo_Infraccion', 'create')
            ->notEmptyString('Tipo_Infraccion');

        $validator
            ->scalar('N_Infraccion')
            ->maxLength('N_Infraccion', 30)
            ->requirePresence('N_Infraccion', 'create')
            ->notEmptyString('N_Infraccion');

        $validator
            ->time('Hora')
            ->requirePresence('Hora', 'create')
            ->notEmptyTime('Hora');

        $validator
            ->date('Fecha')
            ->requirePresence('Fecha', 'create')
            ->notEmptyDate('Fecha');

        $validator
            ->scalar('Lugar')
            ->maxLength('Lugar', 30)
            ->requirePresence('Lugar', 'create')
            ->notEmptyString('Lugar');

        $validator
            ->scalar('Valor')
            ->maxLength('Valor', 30)
            ->requirePresence('Valor', 'create')
            ->notEmptyString('Valor');

        $validator
            ->scalar('Descripcion')
            ->maxLength('Descripcion', 250)
            ->requirePresence('Descripcion', 'create')
            ->notEmptyString('Descripcion');

        return $validator;
    }
}
