<div class="appointments form">
<?php echo $this->Form->create('Appointment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Appointment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('patient_id');
		echo $this->Form->input('doctor_id');
		echo $this->Form->input('date');
		echo $this->Form->input('place');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Appointment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Appointment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
	</ul>
</div>
