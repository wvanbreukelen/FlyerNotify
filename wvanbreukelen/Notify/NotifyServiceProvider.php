<?php

namespace wvanbreukelen\Notify;

use Flyer\Foundation\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider
{
	public function register()
	{
		$app->share('notify', new Notify);
	}
}