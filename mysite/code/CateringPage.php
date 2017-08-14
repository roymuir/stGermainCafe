<?php
class CateringPage extends UserDefinedForm {

	private static $db = array(
		'PageIntro' => 'Text',
		'Description' => 'Text'
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

		$fields->addFieldToTab('Root.Main', new TextField('PageIntro', 'Page intro'), 'Content');
		$fields->addFieldToTab('Root.Main', new TextareaField('Description', 'Homepage description'), 'Content');

		$fields->removeByName('Content');

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

		return $fields;

	}

}

class CateringPage_Controller extends UserDefinedForm_Controller {
}