<?php

class config
{
	static public $version = '1.7.1';
	static public $locale = 'en_US';
	static public $compiling = false;
	static public $compile_dir = '_compiled/';
	static public $views;
	static public $links;
	static public $locale_names;
}

config::$views = array('index', 'manual', 'changelog', 'register', 'guides');

// external links. links that are hard coded in the text string aren't included here

config::$links = array(
	'ase' => 'http://en.wikipedia.org/wiki/The_All-Seeing_Eye',
	'shoozza' => 'http://shoozza.de/',
	'enesce' => 'http://enesce.com/',
	'flieslikeabrick' => 'http://www.u13.net/',
	'tablatures' => 'https://soldat.pl/downloads/tabs.zip'
);

// this stuff doesn't need translations, it's for the main index where you choose language
// the languages will appear in the same order as this list

config::$locale_names = array(
	'en_US' => 'English',
	'pl_PL' => 'Polski',
	'es_LA' => 'Español',
	'de_DE' => 'Deutsch',
	'pt_BR' => 'Portugués (Brasil)',
	'ru_RU' => 'Русский',
	'uk_UA' => 'Українська',
);
