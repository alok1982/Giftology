<?php
/**
 * GiftFixture
 *
 */
class GiftFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => 'NOTE: GIFT is only created upon successful transaction, or for a free product no transaction.  In process and failed transactions stay only in transaction table, and do not show up in gifts table'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'sender_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'receiver_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'receiver_fb_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gift_amount' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'gift_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'expiry_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Needs to be calculated from created_date of this record + days_valid for the product\\n'),
		'post_to_fb' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'gift_message' => array('type' => 'binary', 'null' => true, 'default' => null),
		'receiver_email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_to_send' => array('type' => 'date', 'null' => true, 'default' => null),
		'email' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'email_address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sms' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'sms_number' => array('type' => 'string', 'null' => false, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gift_open' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'gift_open_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_gifts_products1_idx' => array('column' => 'product_id', 'unique' => 0),
			'fk_gifts_gift_statuses1_idx' => array('column' => 'gift_status_id', 'unique' => 0),
			'fk_gifts_user1_idx' => array('column' => 'receiver_id', 'unique' => 0),
			'fk_gifts_user2_idx' => array('column' => 'sender_id', 'unique' => 0),
			'index_gift_code' => array('column' => 'code', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'product_id' => 1,
			'sender_id' => 1,
			'receiver_id' => 1,
			'receiver_fb_id' => 1,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 1,
			'gift_status_id' => 1,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 1,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 1,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 2,
			'product_id' => 2,
			'sender_id' => 2,
			'receiver_id' => 2,
			'receiver_fb_id' => 2,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 2,
			'gift_status_id' => 2,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 2,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 2,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 3,
			'product_id' => 3,
			'sender_id' => 3,
			'receiver_id' => 3,
			'receiver_fb_id' => 3,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 3,
			'gift_status_id' => 3,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 3,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 3,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 4,
			'product_id' => 4,
			'sender_id' => 4,
			'receiver_id' => 4,
			'receiver_fb_id' => 4,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 4,
			'gift_status_id' => 4,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 4,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 4,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 5,
			'product_id' => 5,
			'sender_id' => 5,
			'receiver_id' => 5,
			'receiver_fb_id' => 5,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 5,
			'gift_status_id' => 5,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 5,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 5,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 6,
			'product_id' => 6,
			'sender_id' => 6,
			'receiver_id' => 6,
			'receiver_fb_id' => 6,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 6,
			'gift_status_id' => 6,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 6,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 6,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 7,
			'product_id' => 7,
			'sender_id' => 7,
			'receiver_id' => 7,
			'receiver_fb_id' => 7,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 7,
			'gift_status_id' => 7,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 7,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 7,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 8,
			'product_id' => 8,
			'sender_id' => 8,
			'receiver_id' => 8,
			'receiver_fb_id' => 8,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 8,
			'gift_status_id' => 8,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 8,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 8,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 9,
			'product_id' => 9,
			'sender_id' => 9,
			'receiver_id' => 9,
			'receiver_fb_id' => 9,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 9,
			'gift_status_id' => 9,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 9,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 9,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
		array(
			'id' => 10,
			'product_id' => 10,
			'sender_id' => 10,
			'receiver_id' => 10,
			'receiver_fb_id' => 10,
			'code' => 'Lorem ipsum dolor sit amet',
			'gift_amount' => 10,
			'gift_status_id' => 10,
			'expiry_date' => '2013-04-11',
			'post_to_fb' => 1,
			'gift_message' => 'Lorem ipsum dolor sit amet',
			'receiver_email' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-04-11 15:08:42',
			'modified' => '2013-04-11 15:08:42',
			'date_to_send' => '2013-04-11',
			'email' => 10,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'sms' => 10,
			'sms_number' => 'Lorem ipsum dolor sit amet',
			'gift_open' => 1,
			'gift_open_date' => '2013-04-11 15:08:42'
		),
	);

}
