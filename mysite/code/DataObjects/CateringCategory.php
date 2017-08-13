<?php
class CateringCategory extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'UserDefinedForm'
	);

	private static $has_many = array(
		'CateringOptions' => 'CateringOption'
	);
	
	private static $summary_fields = array(
		'Name' => 'Name'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));

		return $fields;

	}
	
}
