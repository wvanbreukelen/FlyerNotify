<?php

namespace wvanbreukelen\FlyerNotify;

use Flyer\Foundation\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider
{
	public function register()
	{
		$app->share('notify', new Notify);
	}
}