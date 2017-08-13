<?php
class MenusPage extends Page {

	private static $db = array(
		'PageIntro' => 'Text'
	);

	private static $has_many = array(
		'MenuCategories' => 'MenuCategory'
	);

	private static $has_one = array(
		'Image' => 'Image'
	);

	static $description = 'Menus page';

	public function getCMSFields() {

		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new TextField('PageIntro', 'Page intro'), 'Content');

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

		$MenuCategories = new GridField('MenuCategories', 'Menu Categories', $this->MenuCategories(), $GFConfig);
		$fields->addFieldToTab('Root.MenuCategories', $MenuCategories);

		return $fields;

	}

}

class MenusPage_Controller extends Page_Controller {

}