<?php
class CateringOption extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'Price' => 'Currency',
		'Unit' => 'Text',
		'GlutenFree' => 'Boolean',
		'Vegetarian' => 'Boolean'
	);

	private static $has_one = array(
		'ParentPage' => 'CateringCategory'
	);

	private static $has_many = array(
		'CateringItems' => 'CateringItem'
	);

	private static $summary_fields = array(
		'Name' => 'Name',
		'Price' => 'Currency'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));
		$fields->addFieldToTab('Root.Main', new TextField('Price', 'Price'));
		$fields->addFieldToTab('Root.Main', new DropdownField('Unit', 'Unit', array('per person' => 'per person', 'per platter' => 'per platter', 'each' => 'each', 'small bowl' => 'small bowl', 'medium bowl' => 'medium bowl', 'large bowl' => 'large bowl')));
		$fields->addFieldToTab('Root.Main', new CheckboxField('GlutenFree', 'Gluten Free'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('Vegetarian', 'Vegetarian'));

		return $fields;

	}
	
}
