<?php
class Rumah {
	public $alamat,
	$luas,
		$warna;

	// methd
	public function __construct($alamat, $luas, $warna) {
		$this->alamat = $alamat;
		$this->luas = $luas;
		$this->warna = $warna;
	}

	public function alamat() {
		return $this->alamat;
	}

	public function luas() {
		return $this->luas;
	}

	public function warna() {
		return $this->warna;
	}

}

$rumah_obj = new Rumah('Jl.Gang Pojok', '22m', 'hijau');
echo 'Alamat rumah ku :' . $rumah_obj->alamat . '<br>warnanya :' . $rumah_obj->warna . '<br>dan luas' . $rumah_obj->luas;
?>