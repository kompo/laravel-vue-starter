<?php 

namespace App\View\Menus;

use Kompo\Menu;

class Navbar extends Menu
{
	public $style = 'background:white;padding:0.5rem 1rem;';

	public function komponents()
	{
		return [
			_SidebarToggler(),

			_Link('Home')->icon('home')->href('/'),

			_Link('Nav link 1'),
			_Link('Nav link 2'),
			_Link('Nav link 3'),
			_Link('Nav link 4'),
		];
	}
}