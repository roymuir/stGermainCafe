<?php
class CateringPage extends UserDefinedForm {

	private static $db = array(
		'About' => 'HTMLText',
		'HowToOrder' => 'HTMLText'
	);

	private static $has_many = array(
		'CateringCategories' => 'CateringCategory'
	);

	private static $has_one = array(
		'Image' => 'Image'
	);

	static $description = 'Catering page';

	public function getCMSFields() {

		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Image', $imageUploadField = new UploadField('Image', 'Image'));
		$imageUploadField->setFolderName('page-hero-images');

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

		$fields->addFieldToTab('Root.About', new HTMLEditorField('About', 'About Our Catering'));

		$fields->addFieldToTab('Root.HowToOrder', new HTMLEditorField('HowToOrder', 'How To Order'));

		return $fields;

	}

}

class CateringPage_Controller extends UserDefinedForm_Controller {
}