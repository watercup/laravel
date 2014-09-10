<?php

/**
  * douban api
  * music , book etc.
  */

  class DoubanApi {

  	public function __construct() {

  	}
 
   
    public  function getDefaultList() {
    	$params = '王力宏';
      $data = file_get_contents('https://api.douban.com/v2/music/search?q='.$params);
      return $data;
    }

  	public  function getList() {

  	}
    
    public  function getSingle() {
    }

  }