<?php

class Page extends SiteTree {

	private static $db = array(
	);

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
		Requirements::javascript('//code.jquery.com/jquery-3.2.1.min.js');
		Requirements::javascript($this->ThemeDir().'/scripts/libs/jquery.blueimp-gallery.min.js');
		Requirements::javascript('//cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.0.1/lazyload.min.js');
		Requirements::javascript($this->ThemeDir().'/scripts/main-min.js');
		Requirements::javascript('//maps.googleapis.com/maps/api/js?key=AIzaSyBEECCpFGkcBVWtTwHq9pe2HIRnyvP-ApI');
		Requirements::css('//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,600,600i');
		Requirements::css($this->ThemeDir().'/styles/css/libs/blueimp-gallery.min.css');
		Requirements::css($this->ThemeDir().'/styles/css/main-min.css');
	}

	public function copyrightDate() {
		return date("Y");
	}

}
