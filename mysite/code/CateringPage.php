<?php

class CateringPage extends UserDefinedForm {

	private static $db = array(
	);

	private static $has_many = array(
		'CateringCategories' => 'CateringCategory'
	);

	static $description = 'Catering page';

	public function getCMSFields() {

		$fields = parent::getCMSFields();

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

		$CateringCategories = new GridField('CateringCategories', 'Catering Categories', $this->CateringCategories(), $GFConfig);
		$fields->addFieldToTab('Root.CateringCategories', $CateringCategories);

		return $fields;

	}

}

class CateringPage_Controller extends UserDefinedForm_Controller {
}