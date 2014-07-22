<?php

namespace wvanbreukelen\Notify;

class Notify
{
	public function error($message)
	{
		echo "Some error has accurred: " . $error;
	}

	public function warning($message)
	{
		echo "Some warning has accurred: " . $message;
	}

	public function info($message)
	{
		echo "Information! " . $message;
	}
}