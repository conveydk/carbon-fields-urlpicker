<?php
use Carbon_Fields\Carbon_Fields;
use Carbon_Field_UrlPicker\UrlPicker_Field;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require( __DIR__ . '/vendor/autoload.php' );
}

define('Carbon_Field_UrlPicker\\DIR', __DIR__);

class Carbon_UrlPicker_Field
{
	public static function boot()
	{
		Carbon_Fields::extend(UrlPicker_Field::class, function ($container) {
			return new UrlPicker_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
		});
	}
}
