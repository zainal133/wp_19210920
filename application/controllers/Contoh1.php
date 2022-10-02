<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {

	public function index()
	{
		echo "<h1>Perkenalan</h1>";
		echo "
		Nama Zainal Arifin <br>
		Jurusan Sistem Informasi <br>
		Alamat Bukit Nusa Indah";
	}
}
