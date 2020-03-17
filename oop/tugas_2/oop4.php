<?php 
	class Rumah
	{
		public $blok,
			   $luas;

		public function __construct($blok,$luas)
		{
			$this->blok=$blok;
			$this->lias=$luas;
		}
	}

	class ELit extends Rumah
	{
		public $tipe='elit';

		public function rm_el()
		{
			echo 'tipe perumahan :'.$this->tipe.'blok :'.$this->blok.'<br>Luas :'.$this->luas;
		}
	}

	class Ekonomi extends Rumah
	{
		public $tipe='ekonomi';

		public function rm_ek()
		{
			echo 'tipe perumahan :'.$this->tipe.'blok :'.$this->blok.'<br>Luas :'.$this->luas;
		}
	}

	$elit=new Elit('A','23m');
	$elit->rm_el();

	echo "<br><br>";

	$eko=new Ekonomi('G','6m');
	$eko->rm_ek();
 ?>