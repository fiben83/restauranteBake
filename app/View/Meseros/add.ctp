<div class="meseros form">
<?php echo $this->Form->create('Mesero'); ?>
	<fieldset>
		<legend><?php echo __('Add Mesero'); ?></legend>
	<?php
		echo $this->Form->input('dni');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('telefono');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Meseros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
