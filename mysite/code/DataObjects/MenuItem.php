<?php
class MenuItem extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'Price' => 'Currency',
		'Description' => 'Text',
		'GlutenFree' => 'Boolean',
		'Vegetarian' => 'Boolean',
		'Vegan' => 'Boolean'
	);

	private static $has_one = array(
		'ParentPage' => 'MenuCategory'
	);

	private static $has_many = array(
		'Extras' => 'ExtraItem'
	);
	
	private static $summary_fields = array(
		'Name' => 'Name',
		'Price' => 'Price',
		'Description' => 'Description'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));
		$fields->addFieldToTab('Root.Main', new TextField('Price', 'Price'));
		$fields->addFieldToTab('Root.Main', new TextareaField('Description', 'Description'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('GlutenFree', 'Gluten Free'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('Vegetarian', 'Vegetarian'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('Vegan', 'Vegan'));

		return $fields;

	}
	
}
