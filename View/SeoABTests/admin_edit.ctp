<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoABTests form">
	<?php echo $this->Form->create('SeoABTest');?>
		<fieldset>
			<legend><?php echo __('Admin Edit Seo AB Test'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('SeoUri.uri', array('after' => 'The URL or URI expression you want this test to run on.'));
			echo $this->Form->input('slug', array('after' => 'The slug for the your GA custom variable. Cannot contain a \' mark.'));
			echo $this->Form->input('slot', array('options' => $slots, 'default' => 4, 'label' => 'GA custom variable slot'));
			echo $this->Form->input('roll', array('after' => 'The roll must be a number between 1 and 100 (100 being 100% roll success), or a callback function with Model::function syntax.'));
			echo $this->Form->input('description');
			echo $this->Form->input('is_active');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $this->Form->value('SeoABTest.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('SeoABTest.id'))); ?></li>
		</ul>
	</div>
</div>