<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
  $settings->add(new admin_setting_configtextarea('filter_xerteonlinetoolkitsfilter_baseurl', 
												  get_string('xerteonlinetoolkitsfilter_baseurl','filter_xerteonlinetoolkitsfilter'),
												  get_string('xerteonlinetoolkitsfilter_config', 'filter_xerteonlinetoolkitsfilter'),  
												  get_string('xerteonlinetoolkitsfilter_default', 'filter_xerteonlinetoolkitsfilter'), 
												  PARAM_RAW,
												  100, 
												  3));
												  
  $settings->add(new admin_setting_configcheckbox('filter_xerteonlinetoolkitsfilter_allurls',
            get_string('xerteonlinetoolkitsfilter_allfilters','filter_xerteonlinetoolkitsfilter'),
            get_string('xerteonlinetoolkitsfilter_allfilters_desc','filter_xerteonlinetoolkitsfilter'),
            1));
}

