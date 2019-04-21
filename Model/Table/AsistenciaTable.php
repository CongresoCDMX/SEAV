<?php
/**
Sistema de votacion electronico
Created by Dante Cuevas Gonzàlez on 3/21/19.
dante.cuevas@congresociudaddemexico.gob.mx
 **/
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asistencia Model
 *
 * @method \App\Model\Entity\Asistencium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asistencium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Asistencium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asistencium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asistencium|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asistencium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asistencium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asistencium findOrCreate($search, callable $callback = null, $options = [])
 */
class AsistenciaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('asistencia');
        $this->setDisplayField('id_asistencia');
        $this->setPrimaryKey('id_asistencia');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_asistencia')
            ->allowEmptyString('id_asistencia', 'create');

        $validator
            ->integer('id_orden')
            ->allowEmptyString('id_orden');

        $validator
            ->integer('id_diputado')
            ->requirePresence('id_diputado', 'create')
            ->allowEmptyString('id_diputado', false);

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->allowEmptyDateTime('fecha', false);

        return $validator;
    }
}
