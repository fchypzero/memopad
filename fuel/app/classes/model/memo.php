<?php

class Model_Memo extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'text' => array(
			'data_type' => 'text',
			'label' => 'メモ本文',
			'validation' => array('required',),
			'form' => array('type' => 'textarea'),
		),
		'created_at',
		'updated_at'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
		'Observer_SetUserId' => array(
			'events' => array('before_save'),
		),
	);

	

}
