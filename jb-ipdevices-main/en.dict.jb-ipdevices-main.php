<?php

/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * Localized data
 */

Dict::Add('EN US', 'English', 'English', array(

	//
	// Class: IP Device (abstract)
	//
	'Class:IPDevice' => 'IP Device CI',
	'Class:IPDevice+' => '', 
	'Class:IPDevice/Attribute:management_ip' => 'Management IP',
	'Class:IPDevice/Attribute:management_ip+' => '', 
	'Class:IPDevice/Attribute:connectablecis_list' => 'Devices',
	'Class:IPDevice/Attribute:connectablecis_list+' => 'All the devices connected to this network device',
	
	//
	// Class: IP Camera 
	//
	'Class:IPCamera' => 'IP Camera',
	'Class:IPCamera+' => '',   
	 
	//
	// Class: IP Device Generic
	'Class:IPDeviceGeneric' => 'IP Device',
	'Class:IPDeviceGeneric+' => '',   
	
	// Class: IP Phone
	//
	'Class:IPPhone' => 'IP Phone',
	'Class:IPPhone+' => '',
	'Class:IPPhone/Attribute:number_internal' => 'Internal number',
	'Class:IPPhone/Attribute:number_internal+' => 'User can be reached by internal people on this number.', 
	'Class:IPPhone/Attribute:number_external' => 'External number',
	'Class:IPPhone/Attribute:number_external' => 'User can be reached by external people on this number.',
	'Class:IPDevice/Attribute:connectablecis_list+' => 'All the devices connected to this network device',
	
	//
	// Class: Model
	//
	'Class:Model/Attribute:type/Value:IPDeviceGeneric' => 'IP Device',
	'Class:Model/Attribute:type/Value:IPDeviceGeneric+' => 'IP Device',
	'Class:Model/Attribute:type/Value:IPCamera' => 'IP Camera',
	'Class:Model/Attribute:type/Value:IPCamera+' => 'IP Camera',
	
	//
	// Class: lnkConnectableCIToConnectableCI 
	//
	'Class:lnkConnectableCIToConnectableCI' => 'Link ConnectableCI / ConnectableCI',
	'Class:lnkConnectableCIToConnectableCI+' => '',
	'Class:lnkConnectableCIToConnectableCI/Attribute:networkdevice_id' => 'Network device',
	'Class:lnkConnectableCIToConnectableCI/Attribute:networkdevice_id+' => '',
	'Class:lnkConnectableCIToConnectableCI/Attribute:networkdevice_name' => 'Network device name',
	'Class:lnkConnectableCIToConnectableCI/Attribute:networkdevice_name+' => '',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connectableci_id' => 'Connected device',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connectableci_id+' => '',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connectableci_name' => 'Connected device name',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connectableci_name+' => '',
	'Class:lnkConnectableCIToConnectableCI/Attribute:network_port' => 'Network port',
	'Class:lnkConnectableCIToConnectableCI/Attribute:network_port+' => '',
	'Class:lnkConnectableCIToConnectableCI/Attribute:device_port' => 'Device port',
	'Class:lnkConnectableCIToConnectableCI/Attribute:device_port+' => '',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connection_type' => 'Connection type',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connection_type+' => '',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connection_type/Value:downlink' => 'Down link',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connection_type/Value:downlink+' => 'Down link',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connection_type/Value:uplink' => 'Up link',
	'Class:lnkConnectableCIToConnectableCI/Attribute:connection_type/Value:uplink+' => 'Up link',
	'Class:lnkConnectableCIToConnectableCI/Attribute:patch_label' => 'Patch label',
	'Class:lnkConnectableCIToConnectableCI/Attribute:patch_label+' => 'The label of the patch (port/cable)',
	'Class:lnkConnectableCIToConnectableCI/Attribute:cable_type' => 'Cable type',
	'Class:lnkConnectableCIToConnectableCI/Attribute:cable_type+' => 'Cable type. Track if this is a simple ethernet cable (RJ45) or optical fiber cable.',
	'Class:lnkConnectableCIToConnectableCI/Attribute:cable_type/Value:rj45' => 'RJ45',
	'Class:lnkConnectableCIToConnectableCI/Attribute:cable_type/Value:optical_fiber_single_mode' => 'Optical fiber (single mode)',
	'Class:lnkConnectableCIToConnectableCI/Attribute:cable_type/Value:optical_fiber_multi_mode' => 'Optical fiber (multi mode)',
	'Class:lnkConnectableCIToConnectableCI/Attribute:comment' => 'Comment',
	'Class:lnkConnectableCIToConnectableCI/Attribute:comment+' => 'Comments about this link. For instance: (part of) a link aggregation.',

));

