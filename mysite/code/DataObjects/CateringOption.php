<?php
class CateringOption extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'Description' => 'Text',
		'Price' => 'Currency',
		'SecondaryPrice' => 'Currency',
		'PriceRange' => 'Boolean',
		'Unit' => 'Text',
		'Minimum' => 'Text',
		'Serves' => 'Text',
		'Extra' => 'Currency',
		'GlutenFree' => 'Boolean',
		'Vegetarian' => 'Boolean',
		'Vegan' => 'Boolean'
	);

	private static $has_one = array(
		'ParentPage' => 'CateringCategory',
		'Image' => 'Image'
	);

	private static $has_many = array(
		'CateringItems' => 'CateringItem'
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
		$fields->addFieldToTab('Root.Main', new TextareaField('Description', 'Description'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('PriceRange', 'Price Range'));
		$fields->addFieldToTab('Root.Main', new TextField('Price', 'Price'));
		$fields->addFieldToTab('Root.Main', $SecondaryPrice = TextField::create('SecondaryPrice', 'Secondary Price'));
		$fields->addFieldToTab('Root.Main', new DropdownField('Unit', 'Unit', array('per person' => 'per person', 'per platter' => 'per platter', 'each' => 'each', 'per small bowl' => 'per small bowl', 'per medium bowl' => 'per medium bowl', 'per large bowl' => 'per large bowl', 'per 31cm circular tin' => 'per 31cm circular tin')));
		$fields->addFieldToTab('Root.Main', new TextField('Minimum', 'Minimum People'));
		$fields->addFieldToTab('Root.Main', new TextField('Serves', 'Serves Approximately'));
		$fields->addFieldToTab('Root.Main', new TextField('Extra', 'Extra Person Price'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('GlutenFree', 'Gluten Free'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('Vegetarian', 'Vegetarian'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('Vegan', 'Vegan'));

		$fields->addFieldToTab('Root.Main', $imageUploadField = new UploadField('Image', 'Image'));
		$imageUploadField->setFolderName('catering-images');

		$GFConfig = GridFieldConfig::create()->addComponents(
			new GridFieldToolbarHeader(),
			new GridFieldAddNewButton('toolbar-header-right'),
			new GridFieldSortableHeader(),
			new GridFieldDataColumns(),
			new GridFieldPaginator(10),
			new GridFieldEditButton(),
			new GridFieldDeleteAction(),
			new GridFieldDetailForm(),
			new GridFieldOrderableRows('SortID')
		);

		$CateringItems = new GridField('CateringItems', 'Catering Items', $this->CateringItems(), $GFConfig);
		$fields->addFieldToTab('Root.CateringItems', $CateringItems);

		$SecondaryPrice->displayIf('PriceRange')->isChecked();

		return $fields;

	}
	
}
