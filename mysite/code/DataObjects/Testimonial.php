<?php
class Testimonial extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'Position' => 'Text',
		'Location' => 'Text',
		'Description' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'TestimonialsPage'
	);
	
	private static $summary_fields = array(
		'Name' => 'Name',
		'Position' => 'Position',
		'Location' => 'Location',
		'Description' => 'Description'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));
		$fields->addFieldToTab('Root.Main', new TextField('Position', 'Position'));
		$fields->addFieldToTab('Root.Main', new TextField('Location', 'Location'));
		$fields->addFieldToTab('Root.Main', new TextareaField('Description', 'Description'));

		return $fields;

	}
	
}
