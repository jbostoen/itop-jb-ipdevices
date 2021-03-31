# jb-ipdevices
Copyright (c) 2019-2021 Jeffrey Bostoen

[![License](https://img.shields.io/github/license/jbostoen/iTop-custom-extensions)](https://github.com/jbostoen/iTop-custom-extensions/blob/master/license.md)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/jbostoen)
🍻 ☕


Need assistance with iTop or one of its extensions?  
Need custom development?  
Please get in touch to discuss the terms: **jbostoen.itop@outlook.com**

## What?
This contains a number of new classes.

* **IPDevice**: abstract class, parent for various subclasses of IP Devices.
* **IPCamera**: a more specific kind of IP Device
* **IPDeviceGeneric**: generic class for all sorts of devices. Examples: smart home and home automation systems, HVAC, sensors, ...
* **IPPhone**: the most interesting one, because iTop already has an IP Phone. In my humble opinion, it's totally wrong in Combodo's data model. The IP Phone is seen as a phone, instead of a network device ( ConnectableCI ). At my employer, the phones are also switches - they're in between the PC and a regular switch. 

⚠ Careful: this extension completely redefines the original iTop IPPhone class.
Make sure you don't have IP Phones as defined by the default iTop data model; data may get lost!

This extension is not recommended for beginners. For them, I recommend listing your IPPhones as NetworkDevice instead and give it their own type.

## TeemIP add-on
* If Combodo's TeemIP extension is installed, this extension will be adjusted (see subfolder jb-ipdevices-teemip)


## Requirements

iTop extensions
* [jb-lnkconnectablecitoconnectableci](https://github.com/jbostoen/itop-jb-lnkconnectablecitoconnectableci)


## Cookbook

XML
* define new classes
* change attributes of existing classes

## License
https://www.gnu.org/licenses/gpl-3.0.en.html
Copyright (C) 2019-2021 Jeffrey Bostoen
