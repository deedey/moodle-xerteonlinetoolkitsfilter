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

/**
 *  Mediaplugin filter settings
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
  $settings->add(new admin_setting_configtextarea('filter_xerteonlinetoolkits_baseurl', 
												  get_string('xerteonlinetoolkits_baseurl','filter_xerteonlinetoolkits'),
												  get_string('xerteonlinetoolkits_config', 'filter_xerteonlinetoolkits'),  
												  get_string('xerteonlinetoolkits_default', 'filter_xerteonlinetoolkits'), 
												  PARAM_RAW,
												  100, 
												  3));
}

