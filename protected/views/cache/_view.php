<?php
/* @var $this CacheController */
/* @var $data Cache */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_num')); ?>:</b>
	<?php echo CHtml::encode($data->user_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_online_num')); ?>:</b>
	<?php echo CHtml::encode($data->user_online_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_online_time')); ?>:</b>
	<?php echo CHtml::encode($data->user_online_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_user')); ?>:</b>
	<?php echo CHtml::encode($data->last_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_first_visit')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_first_visit); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_topics_num')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_topics_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_posts_num')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_posts_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_today_topics')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_today_topics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_today_posts')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_today_posts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_yesterday_topics')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_yesterday_topics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_yesterday_posts')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_yesterday_posts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_most_topics')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_most_topics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_most_posts')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_most_posts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_account')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_success')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_success); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_num')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_successnum')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_successnum); ?>
	<br />

	*/ ?>

</div>