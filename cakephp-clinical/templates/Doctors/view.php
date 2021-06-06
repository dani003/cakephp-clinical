<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Doctor'), ['action' => 'edit', $doctor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Doctor'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Doctors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Doctor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="doctors view content">
            <h3><?= h($doctor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($doctor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($doctor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accepting Patiens') ?></th>
                    <td><?= $this->Number->format($doctor->accepting_patiens) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($doctor->created) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Appointpents') ?></h4>
                <?php if (!empty($doctor->appointpents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Patient Id') ?></th>
                            <th><?= __('Doctor Id') ?></th>
                            <th><?= __('Appointment Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($doctor->appointpents as $appointpents) : ?>
                        <tr>
                            <td><?= h($appointpents->id) ?></td>
                            <td><?= h($appointpents->patient_id) ?></td>
                            <td><?= h($appointpents->doctor_id) ?></td>
                            <td><?= h($appointpents->appointment_date) ?></td>
                            <td><?= h($appointpents->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Appointpents', 'action' => 'view', $appointpents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Appointpents', 'action' => 'edit', $appointpents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointpents', 'action' => 'delete', $appointpents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointpents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
