<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");
?>

<h2><?php echo JText::_('MOD_MEHRDARMAN_ADMISSION_TITLE'); ?></h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th class="nowrap left"><?php echo JText::_('MOD_MEHRDARMAN_ADMISSION_FIELD_ID') ?></th>
			<th class="nowrap left"><?php echo JText::_('MOD_MEHRDARMAN_ADMISSION_FIELD_NAME') ?></th>
			<th class="nowrap left"><?php echo JText::_('MOD_MEHRDARMAN_ADMISSION_FIELD_TEL') ?></th>
			<th class="nowrap left"><?php echo JText::_('MOD_MEHRDARMAN_ADMISSION_FIELD_DISEASE') ?></th>
			<th class="nowrap left"><?php echo JText::_('MOD_MEHRDARMAN_ADMISSION_FIELD_DESCRIPTION') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($items as $i => $item) : ?>
		<tr class="row<?php echo $i % 2; ?>">
			<td style="width:50%"><?php echo $item->id; ?></td>
			<td style="width:50%"><?php echo $item->name; ?></td>
			<td style="width:50%"><?php echo $item->tel; ?></td>
			<td style="width:50%"><?php echo $item->disease; ?></td>
			<td style="width:50%"><?php echo $item->description; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>