<div class="side-nav">
    <h4 class="heading"><?= __('Actions') ?></h4>
    <?= $this->Html->link(__('New ' . $type), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
    <?= $this->Html->link(__('List ' . $types), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
</div>