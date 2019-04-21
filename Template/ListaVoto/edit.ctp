<?php
/**
Sistema de votacion electronico
Created by Dante Cuevas Gonzàlez on 3/29/19.
dante.cuevas@congresociudaddemexico.gob.mx
**/
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListaVoto $listaVoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $listaVoto->id_lista],
                ['confirm' => __('Are you sure you want to delete # {0}?', $listaVoto->id_lista)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lista Voto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="listaVoto form large-9 medium-8 columns content">
    <?= $this->Form->create($listaVoto) ?>
    <fieldset>
        <legend><?= __('Edit Lista Voto') ?></legend>
        <?php
            echo $this->Form->control('id_propuesta');
            echo $this->Form->control('id_diputado');
            echo $this->Form->control('id_tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
