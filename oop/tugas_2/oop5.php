<?php 
	class Tanaman
	{
		public $kegunaan,
			   $nama,
			   $spesies,
			   $klasifikasi;

		public function __construct($kegunaan,$nama,$spesies,$klasifikasi)
		{
			$this->kegunaan=$kegunaan;
			$this->spesies=$spesies;
			$this->nama=$nama;
			$this->klasifakasi=$this->kelas($klasifikasi);
		}

		private function kelas($klasifikasi)
		{
			if ($klasifikasi == 1) 
			{
				return 'Tumbuhan langka';
			}
			elseif ($klasifikasi ==2) 
			{
				return 'masih banyak';
			}
			else
			{
				return 'PUNAH';
			}
		} 
	}
	class Pohon extends Tanaman
	{
		public $categori='Pohon';

		public function cetak_pohon()
		{
			echo 'kategori :'.$this->categori.'<br>nama :'.$this->nama.'kegunaan :'.$this->kegunaan.'<br>spesies :'.$this->spesies.'<br>'.$this->klasifikasi;
		}
	}

	class Rumput extends Tanaman
	{
		public $categori='Rumput';

		public function cetak_rumput()
		{
			echo 'kategori :'.$this->categori.'<br>nama :'.$this->nama.'kegunaan :'.$this->kegunaan.'<br>spesies :'.$this->tumbuhan.'<br>'.$this->klasifikasi;
		}
	}
	class Sayuran extends Tanaman
	{
		public $categori='Sayuran';

		public function cetak_sayuran()
		{
			echo 'kategori :'.$this->categori.'<br>nama :'.$this->nama.'kegunaan :'.$this->kegunaan.'<br>spesies :'.$this->tumbuhan.'<br>'.$this->klasifikasi;
		}
	}

	$po=new Pohon('di bakar ,dll','pinus','tanaman','2');
	$po->cetak_pohon();

	echo "<br>";
	echo "<br>";
 ?>