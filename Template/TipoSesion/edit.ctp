<?php
/**
Sistema de votacion electronico
Created by Dante Cuevas Gonzàlez on 4/1/19.
dante.cuevas@congresociudaddemexico.gob.mx
**/
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoSesion $tipoSesion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoSesion->id_sesion],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoSesion->id_sesion)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Sesion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoSesion form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoSesion) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Sesion') ?></legend>
        <?php
            echo $this->Form->control('sesion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
