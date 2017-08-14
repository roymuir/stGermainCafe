<?php
class UserDefinedFormExtension extends DataExtension {

	public static $db = array(
		'PageIntro' => 'Text',
		'Description' => 'Text'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Main', new TextField('PageIntro', 'Page intro'));
		$fields->addFieldToTab('Root.Main', new TextareaField('Description', 'Homepage description'));
		//$fields->removeByName('Content');
	}
}
