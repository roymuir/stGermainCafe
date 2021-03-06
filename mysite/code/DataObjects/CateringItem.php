<?php
class CateringItem extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'GlutenFree' => 'Boolean',
		'Vegetarian' => 'Boolean',
		'Vegan' => 'Boolean'
	);

	private static $has_one = array(
		'ParentPage' => 'CateringOption'
	);

	private static $has_many = array(
		'CateringSubItems' => 'CateringSubItem'
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

		$CateringSubItems = new GridField('CateringSubItems', 'Catering Sub-Items', $this->CateringSubItems(), $GFConfig);
		$fields->addFieldToTab('Root.CateringSubItems', $CateringSubItems);

		return $fields;

	}
	
}
