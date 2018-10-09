<?php
class BasicPage extends Page {

	private static $db = array(
		'PageIntro' => 'Text',
		'Description' => 'Text'
	);

	private static $has_one = array(
		'Image' => 'Image'
	);

	static $description = 'Basic page';

	public function getCMSFields() {

		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new TextField('PageIntro', 'Page intro'), 'Content');
		$fields->addFieldToTab('Root.Main', new TextareaField('Description', 'Homepage description'), 'Content');

		$fields->addFieldToTab('Root.Image', $imageUploadField = new UploadField('Image', 'Image'));
		$imageUploadField->setFolderName('page-hero-images');

		return $fields;

	}

}

class BasicPage_Controller extends Page_Controller {

}