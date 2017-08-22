<?php

global $project;
$project = 'mysite';

global $databaseConfig;
require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_GB');

// Set the date format
i18n::set_date_format('dd/MM/yyyy');

// Load extensions
Object::add_extension('SiteConfig', 'SiteConfigExtension');
Object::add_extension('UserDefinedForm', 'UserDefinedFormExtension');
