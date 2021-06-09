<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Element('actions', array('type' => 'Invoice', 'types' => 'Invoices')); ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoices form content">
            <?= $this->Form->create($invoice) ?>
            <fieldset>
                <legend><?= __('Add Invoice') ?></legend>
                <?php
                echo $this->Form->control('patient_id', ['options' => $patients]);
                echo $this->Form->control('amount');
                echo $this->Form->control('service');
                echo $this->Form->control('due');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>