<?php

/**
  *openapi base class
  *
  */

   class OpenApi {

  	public static function createApiObj( $apiName='douban' ) {

  		$className = ucfirst($apiName).'Api';
  		$clasFile = dirname(__FILE__).'/'.$apiName.'/'.$className.'.php';
  		require_once $clasFile;
  		return new $className;
  	}


  }