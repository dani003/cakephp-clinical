<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Element('actions', array('type' => 'Appointment', 'types' => 'Appointments')); ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appointments form content">
            <?= $this->Form->create($appointment) ?>
            <fieldset>
                <legend><?= __('Add Appointment') ?></legend>
                <?php
                echo $this->Form->control('patient_id', ['options' => $patients]);
                echo $this->Form->control('doctor_id', ['options' => $doctors]);
                echo $this->Form->control('appointment_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>