<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Element('actions', array('type' => 'Doctor', 'types' => 'Doctors')); ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="doctors form content">
            <?= $this->Form->create($doctor) ?>
            <fieldset>
                <legend><?= __('Add Doctor') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('accepting_patiens');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>