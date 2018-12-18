<?php

namespace App\Helpers;

use DB;

class Helper {
	
	public static function getEnumValues ($table,$column) {
	    // Pulls column string from DB
	    $enumStr = DB::select(DB::raw('SHOW COLUMNS FROM '.$table.' WHERE Field = "'.$column.'"'))[0]->Type;
	    // Parse string
	    preg_match_all("/'([^']+)'/", $enumStr, $matches);
	    // Return matches
	    return isset($matches[1]) ? $matches[1] : [];
	}
}
