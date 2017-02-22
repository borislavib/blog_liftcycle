<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Views_counter extends CI_Model {
    
    /**
     * Names of the file for IP count and view count
     */
    const filename = 'counter.txt';
    const ip_filename = 'ip.txt'; 
    /**
     * Saves non unique counts 
     */

	function __construct() {

		parent::__construct();

		// $this->load->database();

	} 

    function non_unique_hits() {    
        
        $current_value = (file_exists(self::filename)) ? file_get_contents(self::filename) :  0; 
        
        try {
            file_put_contents(self::filename, ++$current_value);
        } catch(Exception $e) {
            echo 'An error occurred. Please, contact the site administrator.';
        } 
    }
    /**
     * Saves unique counts
     */
    function unique_hits() { 
        $ip = $_SERVER['REMOTE_ADDR'];  
        if(!in_array($ip, file(self::ip_filename, FILE_IGNORE_NEW_LINES))) { 
            try{
                file_put_contents(self::ip_filename, $ip."\n", FILE_APPEND); 
            } catch(Exception $e) {
                echo 'Грешка. Моля свържете се с администратор на сайта.';
            } 
        }
    }
} 