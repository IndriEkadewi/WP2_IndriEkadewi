<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller 
{

	public function index()
	{
		echo "<h1> Perkenalkan </h1>";
		echo "Nama saya Indri Ekadewi <br>
			Saya tinggal di cikampek <br>
			Olahraga yang saya sukai adalah 
			Berlari dan menyanyi";
	}
}	