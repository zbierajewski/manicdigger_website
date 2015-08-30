<?php
require_once("../config/db.php");

class Utility {
	public static function getSQLConnection() {
		if($mysqli == null) {
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$mysqli->set_charset("utf8")) {
                trigger_error($mysqli->error, E_USER_ERROR);
            }

            // check if connection has been successful
			if ($mysqli->connect_errno) {
				trigger_error($mysqli->error, E_USER_ERROR);
			}
		}
		return $mysqli;
	}

	/**
	 * Interval formatting, will use the two biggest interval parts.
	 * On small intervals, you get minutes and seconds.
	 * On big intervals, you get months and days.
	 * Only the two biggest parts are used.
	 */
	public static function formatDateDiff($interval) {
		$doPlural = function($nb,$str){return $nb>1?$str.'s':$str;}; // adds plurals

		$format = array();
		if($interval->y !== 0) {
			$format[] = "%y ".$doPlural($interval->y, "year");
		}
		if($interval->m !== 0) {
			$format[] = "%m ".$doPlural($interval->m, "month");
		}
		if($interval->d !== 0) {
			$format[] = "%d ".$doPlural($interval->d, "day");
		}
		if($interval->h !== 0) {
			$format[] = "%h ".$doPlural($interval->h, "hour");
		}
		if($interval->i !== 0) {
			$format[] = "%i ".$doPlural($interval->i, "minute");
		}
		if($interval->s !== 0) {
			if(!count($format)) {
				return $interval->format("%s ".$doPlural($interval->s, "second"));
			} else {
				$format[] = "%s ".$doPlural($interval->s, "second");
			}
		}

		// Use the two largest
		if(count($format) > 1) {
			$format = array_shift($format)." and ".array_shift($format);
		} elseif(count($format) == 0) {
			return "less than a second";
		} else {
			$format = array_pop($format);
		}

		return $interval->format($format);
	}
}
