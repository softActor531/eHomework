<?php
//Direct Load
require_once dirname( __FILE__ ) . '/hustle-activecampaign.php';
require_once dirname( __FILE__ ) . '/hustle-activecampaign-form-settings.php';
Hustle_Providers::get_instance()->register( 'Hustle_Activecampaign' );
