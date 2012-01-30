<?php
class ActivityFeed extends ActivityFeedAppModel {
	var $actsAs = array(
		'Containable',
		'ActivityFeed.Polymorphic' => array(
			'classField' => 'model',
			'foreignKey' => 'foreign_key'
		)
	);
}