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

		$CateringOptions = new GridField('CateringOptions', 'Catering Options', $this->CateringOptions(), $GFConfig);
		$fields->addFieldToTab('Root.CateringOptions', $CateringOptions);

		return $fields;

	}
	
}
