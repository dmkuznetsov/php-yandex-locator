<?php
/**
 * Generated by "Autoload generator"
 * @link http://github.com/dmkuznetsov/php-autoloader
 * @date 2013-11-06 23:05
 */
function __dm_autoload_locator( $name )
{
	$map = array (
  'Yandex\\Locator\\Api' => 'source/Yandex/Locator/Api.php',
  'Yandex\\Locator\\Exception' => 'source/Yandex/Locator/Exception.php',
  'Yandex\\Locator\\Exception\\CurlError' => 'source/Yandex/Locator/Exception/CurlError.php',
  'Yandex\\Locator\\Exception\\ServerError' => 'source/Yandex/Locator/Exception/ServerError.php',
  'Yandex\\Locator\\Response' => 'source/Yandex/Locator/Response.php',
  'Yandex\\Locator\\Transport' => 'source/Yandex/Locator/Transport.php',
);
	if ( isset( $map[ $name ] ) )
	{
		require $map[ $name ];
	}
}
spl_autoload_register( '__dm_autoload_locator' );