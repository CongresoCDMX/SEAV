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
 * TipoAsistencia Model
 *
 * @method \App\Model\Entity\TipoAsistencium get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoAsistencium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoAsistencium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoAsistencium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoAsistencium|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoAsistencium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoAsistencium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoAsistencium findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoAsistenciaTable extends Table
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

        $this->setTable('tipo_asistencia');
        $this->setDisplayField('id_tipo_asistencia');
        $this->setPrimaryKey('id_tipo_asistencia');
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
            ->integer('id_tipo_asistencia')
            ->allowEmptyString('id_tipo_asistencia', 'create');

        $validator
            ->scalar('asistencia_tipo')
            ->maxLength('asistencia_tipo', 45)
            ->allowEmptyString('asistencia_tipo');

        return $validator;
    }
}
