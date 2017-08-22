<?php
class SiteConfigExtension extends DataExtension {

	public static $db = array(
		'Phone' => 'Text',
		'Email' => 'Text',
		'Address' => 'Text',
		'OpeningHours' => 'Text',
		'OpeningHoursFull' => 'HTMLText',
		'Facebook' => 'Text',
		'Instagram' => 'Text'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.ContactDetails', new TextField('Phone', 'Phone'));
		$fields->addFieldToTab('Root.ContactDetails', new TextField('Email', 'Email'));
		$fields->addFieldToTab('Root.ContactDetails', new TextareaField('Address', 'Address'));
		$fields->addFieldToTab('Root.OpeningHours', new TextareaField('OpeningHours', 'Opening Hours Short'));
		$fields->addFieldToTab('Root.OpeningHours', new HtmlEditorField('OpeningHoursFull', 'Opening Hours Full'));
		$fields->addFieldToTab('Root.Social', new TextField('Facebook', 'Facebook'));
		$fields->addFieldToTab('Root.Social', new TextField('Instagram', 'Instagram'));
	}
}
