<?php
class HomeImage extends DataObject {

	private static $db = array(
		'SortID' => 'Int'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
		'Image' => 'Image'
	);

	function ImageThumb(){ 
		return $this->Image()->SetWidth(200);
	}
	
	private static $summary_fields = array(
		'ImageThumb' => 'Image' 
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', $imageUploadField = new UploadField('Image', 'Image'));
		$imageUploadField->setFolderName('home-images');

		return $fields;

	}
	
}
