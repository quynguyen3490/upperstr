<?php namespace Quynguyen\Upperstr;

use Illuminate\Support\Facades\Facade;

class Upperstr extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'upperstr'; }

}