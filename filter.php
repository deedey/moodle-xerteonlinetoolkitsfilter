<?php 

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/filelib.php');

class filter_xerteonlinetoolkits extends moodle_text_filter {

    function filter($text, array $options = array()) {
        global $CFG, $PAGE;

        if (!is_string($text)) {
            // non string data can not be filtered anyway
            return $text;
        }
		
		$search = '/' . str_replace("/","\/",$CFG->filter_xerteonlinetoolkits_baseurl) . '([0-9]+)/';
		
		$newtext = preg_replace($search, "<iframe height='680' width='900' src='" . $CFG->filter_xerteonlinetoolkits_baseurl . "$1' />", $text);

        return $newtext;
    }
	
}


?>
