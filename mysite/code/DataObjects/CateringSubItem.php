<?php
class CateringSubItem extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'GlutenFree' => 'Boolean',
		'Vegetarian' => 'Boolean',
		'Vegan' => 'Boolean'
	);

	private static $has_one = array(
		'ParentPage' => 'CateringItem'
	);
	
	private static $summary_fields = array(
		'Name' => 'Name'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextareaField('Name', 'Name'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('GlutenFree', 'Gluten Free'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('Vegetarian', 'Vegetarian'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('Vegan', 'Vegan'));

		return $fields;

	}
	
}
