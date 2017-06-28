# laravel-lgml-convert-command
lastwhitebird/laravel-lgml-convert-command

## Synopsis

Laravel (artisan) command bundle to convert LGML <-> XML 

## Code Example

config/app.php:
```php
    'providers' => [
    
	//...lalala ur providerz here
	
	LWB\LGMLConvert\ConvertCommandServiceProvider::class,
	]
```

Command line:
```bat
php artisan lwb:convert lgml.lgml >C:\Users\MyWindowsUsername\AppData\Local\org.kde.syntax-highlighting\syntax\lgml.xml
```

## Motivation

This component is made just to show great possibilities of lgml-parser. Enjoy life with no XML (when possible)

## Installation

composer require lastwhitebird/laravel-lgml-convert-command

## License

This library is licensed under LGPL v2.1