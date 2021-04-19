@extends('kompo::app', [
	'Navbar' => new App\View\Menus\Navbar(),
	'LeftSidebar' => new App\View\Menus\Sidebar(),
])

@push('header')

    <!-- Custom header elements may be defined here -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

@endpush

