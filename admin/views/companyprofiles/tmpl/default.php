<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_companyprofile
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

JHtml::_('formbehavior.chosen', 'select');

$listOrder     = $this->escape($this->state->get('list.ordering'));
$listDirn      = $this->escape($this->state->get('list.direction'));
?>
<form action="index.php?option=com_companyprofile&view=companyprofiles" method="post" id="adminForm" name="adminForm">
	<div class="row-fluid">
		<div class="span6">
			<?php echo JText::_('COM_COMPANYPROFILE_COMPANYPROFILES_FILTER'); ?>
			<?php
				echo JLayoutHelper::render(
					'joomla.searchtools.default',
					array('view' => $this)
				);
			?>
		</div>
	</div>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_COMPANYPROFILE_NUM'); ?></th>
			<th width="2%">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>)" />
			</th>
			<th width="15%">
				<?php echo JHtml::_('grid.sort', 'COM_COMPANYPROFILE_COMPANYPROFILES_NAME', 'company', $listDirn, $listOrder);?>
			</th>
			<th width="15%">
				<?php echo JHtml::_('grid.sort', 'COM_COMPANYPROFILE_COMPANYPROFILES_ADRESS', 'adress', $listDirn, $listOrder);?>
			</th>
			<th width="15%">
				<?php echo JHtml::_('grid.sort', 'COM_COMPANYPROFILE_COMPANYPROFILES_CITY', 'city', $listDirn, $listOrder);?>
			</th>
			<th width="45%">
				<?php echo JHtml::_('grid.sort', 'COM_COMPANYPROFILE_COMPANYPROFILES_PHONE', 'phone', $listDirn, $listOrder);?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'COM_COMPANYPROFILE_PUBLISHED', 'published', $listDirn, $listOrder); ?>
			</th>
			<th width="2%">
				<?php echo JHtml::_('grid.sort', 'COM_COMPANYPROFILE_ID', 'id', $listDirn, $listOrder); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_companyprofile&task=companyprofile.edit&id=' . $row->id);
				?>
					<tr>
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_COMPANYPROFILE_EDIT_COMPANYPROFILE'); ?>">
								<?php echo $row->company; ?>
							</a>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_COMPANYPROFILE_EDIT_COMPANYPROFILE'); ?>">
								<?php echo $row->adress; ?>
							</a>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_COMPANYPROFILE_EDIT_COMPANYPROFILE'); ?>">
								<?php echo $row->city; ?>
							</a>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_COMPANYPROFILE_EDIT_COMPANYPROFILE'); ?>">
								<?php echo $row->phone; ?>
							</a>
						</td>
						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->published, $i, 'companyprofiles.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>"/>
	<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>"/>
	<?php echo JHtml::_('form.token'); ?>
</form>
