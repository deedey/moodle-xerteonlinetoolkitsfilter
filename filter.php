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
		
		$search = '/XOT\[([a-zA-z0-9\.\-\/_:]+)\]/';
		
		$newtext = preg_replace($search, "<iframe height='680' width='900' src='$1' />", $text);

        return  $newtext;
    }
	
}


?>
