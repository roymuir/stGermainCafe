<?php
class ExtraItem extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'Price' => 'Currency'
	);

	private static $has_one = array(
		'ParentMenuItem' => 'MenuItem'
	);
	
	private static $summary_fields = array(
		'Name' => 'Name',
		'Price' => 'Price'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));
		$fields->addFieldToTab('Root.Main', new TextField('Price', 'Price'));

		return $fields;

	}
	
}
