<div class="transactions form">
<?php echo $this->Form->create('Transaction');?>
	<fieldset>
		<legend><?php echo __('Edit Transaction'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('branch_id');
		echo $this->Form->input('type');
		echo $this->Form->input('balance');
		echo $this->Form->input('modified_user_id');
		echo $this->Form->input('reciept_number');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transaction.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Transaction.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index'));?></li>
	</ul>
</div>
