<?php 

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/filelib.php');

class filter_xerteonlinetoolkitsfilter extends moodle_text_filter {

    function filter($text, array $options = array()) {
	
        global $CFG, $PAGE;
		
        if (!is_string($text)) {
            // non string data can not be filtered anyway
            return $text;
        }
		
		//echo "***" . $CFG->filter_xerteonlinetoolkits_allurls . "***<br />";
		
		if($CFG->filter_xerteonlinetoolkitsfilter_allurls==1){
		
			$newtext = preg_replace("/XOT\[(.+[0-9]+)\]/", "|||$1***", $text);
			
			$newtext = str_replace("|||http","|||",$newtext);
		
			$search = '/' . str_replace("/","\/",str_replace("?","\?",$CFG->filter_xerteonlinetoolkitsfilter_baseurl)) . '([0-9]+)/';
			
			$newtext = preg_replace($search, "<iframe height='680' width='900' src='" . $CFG->filter_xerteonlinetoolkitsfilter_baseurl . "$1'></iframe>", $newtext);
			
			$newtext = str_replace("|||", "<iframe height='680' width='900' src='http", str_replace("***", "'></iframe>", $newtext));
			
		}else{
		
			$newtext = preg_replace("/XOT\[(.+[0-9]+)\]/", "<iframe height='680' width='900' src='$1'></iframe>", $text);
		
		}

        return $newtext;
		
    }
	
}


?>
