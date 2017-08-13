<?php
class MenuCategory extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'MenusPage'
	);

	private static $has_many = array(
		'MenuItems' => 'MenuItem'
	);
	
	private static $summary_fields = array(
		'Name' => 'Name'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$GFConfig = GridFieldConfig::create()->addComponents(
			new GridFieldToolbarHeader(),
			new GridFieldAddNewButton('toolbar-header-right'),
			new GridFieldSortableHeader(),
			new GridFieldDataColumns(),
			new GridFieldPaginator(20),
			new GridFieldEditButton(),
			new GridFieldDeleteAction(),
			new GridFieldDetailForm(),
			new GridFieldOrderableRows('SortID')
		);

		$MenuItems = new GridField('MenuItems', 'Menu Itens', $this->MenuItems(), $GFConfig);
		$fields->addFieldToTab('Root.MenuItems', $MenuItems);

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));

		return $fields;

	}
	
}
