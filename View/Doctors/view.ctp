<div class="doctors view">
<h2><?php echo __('Doctor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identification'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['identification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctor'), array('action' => 'edit', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctor'), array('action' => 'delete', $doctor['Doctor']['id']), null, __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Appointments'); ?></h3>
	<?php if (!empty($doctor['Appointment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Doctor Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Place'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($doctor['Appointment'] as $appointment): ?>
		<tr>
			<td><?php echo $appointment['id']; ?></td>
			<td><?php echo $appointment['patient_id']; ?></td>
			<td><?php echo $appointment['doctor_id']; ?></td>
			<td><?php echo $appointment['date']; ?></td>
			<td><?php echo $appointment['place']; ?></td>
			<td><?php echo $appointment['created']; ?></td>
			<td><?php echo $appointment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'appointments', 'action' => 'view', $appointment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'appointments', 'action' => 'edit', $appointment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'appointments', 'action' => 'delete', $appointment['id']), null, __('Are you sure you want to delete # %s?', $appointment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
