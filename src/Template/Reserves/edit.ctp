<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserve $reserve
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reserve->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reserve->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reserves'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reserves form large-9 medium-8 columns content">
    <?= $this->Form->create($reserve) ?>
    <fieldset>
        <legend><?= __('Edit Reserve') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('shift');
            echo $this->Form->control('vehicle_id', ['options' => $vehicles]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
