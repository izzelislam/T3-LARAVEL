<?php 
	class Komputer
	{
		public static $berat='2kg',
			   $merek='none',
			   $harga='000.00-,';

		public function __construct($berat,$merek,$harga)
		{
			$this->berat=$berat;
			$this->merek=$merek;
			$this->harga=$harga;
		}
		public static function get_berat()
		{
			return self::berat;
		}
		public static function get_merek()
		{
			return self::$merek;
		}
		public static function get_harga($harga)
		{
			self::$harga=$harga;
			return self::$harga;
		}
	}

	echo Komputer::get_harga(10000);
 ?>