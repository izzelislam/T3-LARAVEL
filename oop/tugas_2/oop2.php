<?php 
	class Mapel
	{
		public $nama,
			   $hari,
			   $durasi;

		public function __construct($nama,$hari,$durasi)
		{
			$this->nama=$nama;
			$this->durasi=$durasi;
			$this->hari=$this->Day($hari);

		}

		private function Day($hari)
		{
			 if ($hari == 1) 
				{
					return 'Jumat';
				}
			elseif ($hari == 2) 
				{
					return 'Sabtu';
				}
			elseif ($hari == 3) 
				{
					return 'Ahad';
				}
			elseif ($hari == 4) 
				{
					return 'Senin';
				}
			elseif ($hari == 5) 
				{
					return 'Selasa';
				}
			elseif ($hari == 6) 
				{
					return 'Rabu';
				}
			elseif ($hari == 7) 
				{
					return 'Kamis';
				}
			else
				{
					return 'nothing day';
				}
		}
	}
	class Programing extends Mapel
	{
		public $kelas='programing';

		function cetak_programing()
		{
			echo 'kelas :'.$this->kelas.'<br>nama mapel :'.$this->nama.'<br> hari :'.$this->hari.'<br>durasi :'.$this->durasi;
		}
	}
	class Mulmed extends Mapel
	{
		public $kelas='Multimedia';

		function cetak_mulmed()
		{
			echo 'kelas :'.$this->kelas.'<br>nama mapel :'.$this->nama.'<br> hari :'.$this->hari.'<br>durasi :'.$this->durasi;
		}
	}

	$programing_obj=new Programing('Laravel',3,'19:00-23:00');
	$programing_obj->cetak_programing();
echo "<br><br>";
	$programing_obj1=new Programing('Vue Js',5,'19:00-21:30');
	$programing_obj1->cetak_programing();
echo "<br><br>";
	$mulmed_obj=new Mulmed('AE',4,'13-00-15-00');
	$mulmed_obj->cetak_mulmed();
 ?>