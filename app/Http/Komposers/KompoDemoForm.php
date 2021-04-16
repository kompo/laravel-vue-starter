<?php

namespace App\Http\Komposers;

use Kompo\{Form, Title, Columns, Rows, Input, Image, MultiSelect, Textarea, SubmitButton};

class KompoDemoForm extends Form
{
	public $style = 'max-width: 700px;margin:0 auto';

	public function handle()
	{
		return '<div>'.var_export(request()->all(), true).'</div>';
	}

	public function komponents()
	{
		return [
			Title::form('Sample Form'),
			Columns::form(
				Rows::form(
					Input::form('Name'),
					Input::form('Email')->type('email')
				),
				Image::form('Profile pic')
			),
			MultiSelect::form('Stack')->options([
				'1' => 'laravel',
				'2' => 'vue.js',
				'3' => 'tailwind-css'
			]),
			Textarea::form('About me')->rows(6),
			SubmitButton::form('Dump request')->inModal()
		];
	}

	public function rules()
	{
		return [
			'name' => 'required|min:3',
			'email' => 'required|email',
			'profile_pic' => 'required|mimes:jpeg,bmp,png',
			'stack' => 'required|array',
			'stack.*' => 'required|in:1,2,3'
    	];
	}
}