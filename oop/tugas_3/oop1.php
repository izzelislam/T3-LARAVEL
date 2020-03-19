<?php 
	abstract class Kendaraan
	{
		public $jumlah_roda,
			   $merek;

		public function __construct($jumlah_roda,$merek)
		{
			$this->jumlah_roda=$jumlah_roda;
			$this->merek=$merek;
		}
		abstract function jumlah_roda();
		abstract function merek();
	}
	trait Rego{
		public function diskon(){
			return "produk ini diskon 50%";
		}
	}
	trait Warna{
		public $warna;

		public function prin_warna($warna)
		{
			 $this->warna=$warna;
			 return $this->warna;
		}
	}

	class Mobil extends Kendaraan
	{
		public  function jumlah_roda(){
			return $this->jumlah_roda;
		}
		public function merek(){
			return $this->merek;
		}
		use Rego;
		use Warna;
	}

	$ken=new Mobil(6,'Hino');
	echo 'jumlah roda :'.$ken->jumlah_roda();
	echo '<br>merek :'.$ken->merek();
	echo '<br>'.$ken->diskon();
	echo '<br>Werana :'.$ken->prin_warna('merah');
	

 ?>