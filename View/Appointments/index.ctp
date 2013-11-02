<div class="appointments index">
	<h2><?php echo __('Appointments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th><?php echo $this->Paginator->sort('doctor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('place'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($appointments as $appointment): ?>
	<tr>
		<td><?php echo h($appointment['Appointment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($appointment['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $appointment['Patient']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($appointment['Doctor']['name'], array('controller' => 'doctors', 'action' => 'view', $appointment['Doctor']['id'])); ?>
		</td>
		<td><?php echo h($appointment['Appointment']['date']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['place']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['created']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $appointment['Appointment']['id']), null, __('Are you sure you want to delete # %s?', $appointment['Appointment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
	</ul>
</div>
