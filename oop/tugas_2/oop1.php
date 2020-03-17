<?php 
	class Kendaraan
	{
		public $tipe,
			   $kapasitas,
			   $warna,
			   $merek;

		public function __construct($tipe,$kapasitas,$warna,$merek)
		{
			$this->tipe=$tipe;
			$this->kapasitas=$kapasitas;
			$this->warna=$warna;
			$this->merek=$merek;
		}

		protected function cetak_tipe()
		{
			return $this->tipe;
		}

		protected function cetak_kapasitas()
		{
			return $this->kapasitas;
		}

		protected function cetak_warna()
		{
			return $this->warna;
		}

		protected function cetak_merek()
		{
			return $this->merek;
		}
	}

	
	class Truk extends Kendaraan
	{
		public function cetak_truk()
		{
			echo "truk ini mereknya :".$this->merek.'<br> dan warnanya :'.$this->warna;
		}
	}

	class Buss extends Kendaraan
	{
		public function cetak_buss()
		{
			echo 'buss ini berkapasitas :'.$this->kapasitas.'orang<br> mereknya adalah :'.$this->merek;
		}
	}

	class carry extends Kendaraan
	{
		public function cetak_carry()
		{
			echo 'mobil carry merek'.$this->merek.'<br>tipe :'.$this->tipe;
		}
	}

	$obj_truk=new truk('B12','900 ton','hijau','Hino');
	$obj_truk->cetak_truk();

	echo '<br><br>';

	$obj_buss=new Buss('T0021','90','biru','adiputro');
	$obj_buss->cetak_buss();

	echo '<br><br>';

	$obj_carry=new Carry('M02','500 kwintal','hitam',': mitsubishi');
	$obj_carry->cetak_carry();

 ?>


