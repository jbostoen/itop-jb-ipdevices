<?php

/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2020-04-09 16:58:14
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'jb-ipdevices-lnkconnectablecitoconnectableci/2.6.200409',
	array(
		// Identification
		//
		'label' => 'Datamodel: IP Devices - lnkConnectableCIToConnectableCI',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-config-mgmt/2.6.0',
			'itop-endusers-devices/2.6.0',
			'jb-lnkconnectablecitoconnectableci/2.6.0',
			'jb-ipdevices-main/2.6.190110'
		),
		'mandatory' => false,
		'visible' => true,
		'auto_select' => 'SetupInfo::ModuleIsSelected("jb-ipdevices-main") && SetupInfo::ModuleIsSelected("jb-lnkconnectablecitoconnectableci")',

		// Components
		//
		'datamodel' => array(
			'model.jb-ipdevices-lnkconnectablecitoconnectableci.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);

