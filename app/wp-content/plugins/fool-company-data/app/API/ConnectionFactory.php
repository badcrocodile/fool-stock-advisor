<?php


namespace Fool;


use Katzgrau\KLogger\Logger;
use Psr\Log\LogLevel;

class ConnectionFactory {
	public static function getData( array $ticker, $endpoint ) {
		try {
			$data = ( new Connection( $ticker, $endpoint ) )->getData();
		} catch( \Exception $e ) {
			LogHandler::writeToLog( 'Connection Error', $e, 'error' );

			return "<div class='error error-warning'>Error fetching data from the API. Please try again later.</div>";
		}

		return $data;
	}

	public function doSomething( $thing ) {
		return "thing";
	}

}