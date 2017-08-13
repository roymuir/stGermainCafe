<?php
class GalleryPage extends Page {

	private static $db = array(
		'PageIntro' => 'Text'
	);

	private static $has_many = array(
		'GalleryImages' => 'GalleryImage'
	);

	private static $has_one = array(
		'Image' => 'Image'
	);

	static $description = 'Gallery page';

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

		$GalleryImages = new GridField('GalleryImages', 'Images', $this->GalleryImages(), $GFConfig);
		$fields->addFieldToTab('Root.GalleryImages', $GalleryImages);

		return $fields;

	}

}

class GalleryPage_Controller extends Page_Controller {

}
