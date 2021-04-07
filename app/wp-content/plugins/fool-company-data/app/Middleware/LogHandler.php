<?php


namespace Fool;


use Katzgrau\KLogger\Logger;

class LogHandler {
	public static function writeToLog( $msg = "", $error = "", $log_level = "info" ) {
		$logger = new Logger( WP_PLUGIN_DIR . "/fool-company-data/logs" );

		if($log_level == 'error') {
			$logger->error( $msg . ": " . $error );
		} elseif($log_level == 'debug') {
			$logger->debug( $msg . ": " . $error );
		} else {
			$logger->info( $msg . ": " . $error );
		}
	}
}