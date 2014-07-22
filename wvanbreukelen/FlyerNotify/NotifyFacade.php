<?php

namespace wvanbreukelen\FlyerNotify;

use Flyer\Foundation\Facades\Facade;

class Notify extends Facade
{
	protected static function getFacadeAccessor() { return 'notify'; }
}