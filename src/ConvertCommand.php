<?php

namespace LWB\LGMLConvert;

use Illuminate\Console\Command;
use \LWB\LGMLParser\Tree as Tree;

class ConvertCommand extends Command
{
	protected $signature = 'lwb:convert {filename}';
	protected $description = 'Convert LGML <-> XML.';

	public function __construct()
	{
		parent::__construct();
	}

	public function handle()
	{
		$fname = $this->argument('filename');
		$extension = pathinfo($fname, PATHINFO_EXTENSION);
		if (strtolower($extension) == 'lgml')
		{
			$tree = Tree::factoryFromFile($fname);
			echo $tree->toXML();
		}
		else
		{
			$tree = Tree::factoryFromXML($fname);
			echo $tree->__toString();
		}
	}
}
