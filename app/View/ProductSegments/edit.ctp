<div class="productSegments form">
<?php echo $this->Form->create('ProductSegment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product Segment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('min_age');
		echo $this->Form->input('max_age');
		echo $this->Form->input('city');
		echo $this->Form->input('gender');
		echo $this->Form->input('interests');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductSegment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProductSegment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Segments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
