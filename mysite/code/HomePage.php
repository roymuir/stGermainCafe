<?php
class HomePage extends Page {

	private static $db = array(
		// 'HomeTitle' => 'Text',
		// 'HomeDescription' => 'Text'
	);

	private static $has_many = array(
		'HomeImages' => 'HomeImage'
	);

	static $description = 'Full-screen image home page';

	public function getCMSFields() {

		$fields = parent::getCMSFields();

		$fields->removeByName('Content');

		// $fields->addFieldToTab('Root.Main', new TextField('HomeTitle', 'Title'), 'Metadata');
		// $fields->addFieldToTab('Root.Main', new TextareaField('HomeDescription', 'Description'), 'Metadata');

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

		$HomeImages = new GridField('HomeImages', 'Images', $this->HomeImages(), $GFConfig);
		$fields->addFieldToTab('Root.HomeImages', $HomeImages);

		return $fields;

	}

}

class HomePage_Controller extends Page_Controller {

	function RandomHomeImages($num=1) {
		return DataObject::get('HomeImage', '', 'RAND()', '', $num);
		//return HomeImage::get()->sort('RAND()');
    }
}
