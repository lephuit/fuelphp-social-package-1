<?php

namespace Social;

class Fb {

	public static $_instance = false;

	protected static $_config = null;


	public static function _init() {

		//\Config::load('facebook', true);
		static::$_config = \Config::get('app');

	}


	public static function forge( ) {

		if (static::$_instance) 
			return static::$_instance;

		static::$_instance = new Facebook( array(
			'appId'		=> static::$_config['id'], 
			'secret'	=> static::$_config['secret'] 
		));

		return static::$_instance;

	}


	public static function __callStatic( $method, $arguments ) {
		
		if( !method_exists( static::forge(), $method ) )
			throw new Exception( 'No such method (' . $method . ')' );
		
		return call_user_func_array( array( static::forge(), $method ), $arguments );
		
	}


}