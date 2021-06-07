<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrier $carrier
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Element('actions', array('type' => 'Carrier', 'types' => 'Carriers')); ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carriers form content">
            <?= $this->Form->create($carrier) ?>
            <fieldset>
                <legend><?= __('Add Carrier') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('carrier_code');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>