<?php
class TestimonialsPage extends Page {

	private static $db = array(
		'PageIntro' => 'Text'
	);

	private static $has_many = array(
		'Testimonials' => 'Testimonial'
	);

	private static $has_one = array(
		'Image' => 'Image'
	);

	static $description = 'Customer testimonials page';

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

		$Testimonials = new GridField('Testimonials', 'Testimonials', $this->Testimonials(), $GFConfig);
		$fields->addFieldToTab('Root.Testimonials', $Testimonials);

		return $fields;

	}

}

class TestimonialsPage_Controller extends Page_Controller {

}