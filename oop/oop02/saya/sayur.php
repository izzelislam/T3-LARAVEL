<?php
namespace saya;

class sayur
{
	public $nama,
		   $harga;


	public function nama($nama)
	{
		$this->nama=$nama;
	}

	public function d_nama(){
		return $this->nama;
	}
}

class buah extends sayur{
	public $nama,
		   $harga;

	public function __construct($nama)
	{
		$this->nama=$nama;
	}

	public function d_nama()
	{
		return $this->nama;
	}
}
$yur=new sayur();
$yur->nama("bayam");
echo $yur->d_nama()."<br>";

$buah=new buah("tomat");
echo $buah->d_nama();