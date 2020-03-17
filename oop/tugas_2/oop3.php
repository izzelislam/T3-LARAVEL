<?php 
	class Siswa
	{
		public $nama,
			   $jurusan;

		public function __construct($nama,$jurusan)
		{
			$this->nama=$nama;
			$this->jurusan=$this->jurusan_minat($jurusan);
		}

		protected function jurusan_minat($jurusan)
		{
			if ($jurusan == 1) {
				return 'Programing';
			}
			else{
				return 'Multimedia';
			}
		}
	}

	class KelasA extends Siswa
	{
		public $kelas='A';

		public function cetak_kelasa()
		{
			echo 'kelas :'.$this->kelas.'<br>nama :'.$this->nama.'<br>jurusan :'.$this->jurusan.'<br>'.$this->alert();
		}

		private function alert()
		{
			return 'ini adalah data kelas A';
		}
	}
	class KelasB extends Siswa
	{
		public $kelas='B';

		public function cetak_kelasb()
		{
			echo 'kelas :'.$this->kelas.'<br>nama :'.$this->nama.'<br>jurusan :'.$this->jurusan.'<br>'.$this->alert();
		}

		private function alert()
		{
			return 'ini adalah data kelas B';
		}
	}

	$A_obj=new KelasA('bamb',1);
	$A_obj->cetak_kelasa();

	echo "<br><br>";

	$b_obj=new KelasB('uwu',0);
	$b_obj->cetak_kelasb();
 ?>