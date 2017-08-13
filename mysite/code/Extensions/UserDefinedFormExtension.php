<?php
class UserDefinedFormExtension extends DataExtension {

	public static $db = array(
		'PageIntro' => 'Text'
	);

	private static $has_many = array(
	);

	private static $has_one = array(
	);

	public function updateCMSFields(FieldList $fields) {

		$fields->addFieldToTab('Root.Main', new TextField('PageIntro', 'Page intro'), 'Content');

		$fields->removeByName('Content');

		return $fields;
	}
}
