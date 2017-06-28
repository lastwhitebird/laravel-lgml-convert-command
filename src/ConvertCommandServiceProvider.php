<?php

namespace LWB\LGMLConvert;

use Console\InstallCommand;
use Illuminate\Support\ServiceProvider;

class ConvertCommandServiceProvider extends ServiceProvider
{

	public function boot()
	{
	}

	public function register()
	{
		$this->registerCommands();
	}

	protected function registerCommands()
	{
		$this->registerInstallCommand();
	}

	protected function registerInstallCommand()
	{
		$this->commands(\LWB\LGMLConvert\ConvertCommand::class);
	}

	public function provides()
	{
		return [];
	}
}