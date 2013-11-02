<div class="patients form">
<?php echo $this->Form->create('Patient'); ?>
	<fieldset>
		<legend><?php echo __('Edit Patient'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('identification');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('cellphone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Patient.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Patient.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
	</ul>
</div>
