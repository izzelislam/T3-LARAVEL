<?php
class Baju
{
	public $model,
		   $categori,
		   $ukuran,
		   $warna,
		   $stok,
		   $price;

	public function __construct($model,$categori,$ukuran,$warna,$stok,$price)
	{
		$this->model=$model;
		$this->categori=$categori;
		$this->ukuran=$ukuran;
		$this->warna=$ukuran;
		$this->stok=$stok;
		$this->price=$price;
	}
	public function modelBaju()
	{
		return $this->model;
	}
	public function categoriBaju()
	{
		return $this->categori;
	}
	public function ukuranBaju()
	{
		return $this->ukuran;
	}
	public function warnaBaju()
	{
		return $this->warna;
	}
	public function stokBaju()
	{
		return $this->stok;
	}
	public function priceBaju()
	{
		return $this->price;
	}
}

$baju_obj = new Baju(
	            'koko',
	            'pakaian pria',
	            'xl',
	            'Abu-Abu',
	            '10',
	            'Rp:100.000'
			);

echo 'nama :'.$baju_obj->modelBaju().
	 '<br>categori :'.$baju_obj->categoriBaju().
	 '<br> ukuran :'.$baju_obj->ukuranBaju().
	 '<br>warna :'.$baju_obj->warnaBaju().
	 '<br>stok :'.$baju_obj->stokBaju().
	 '<br>price :'.$baju_obj->priceBaju();

echo "<br><br>";

$baju_obj1 = new Baju(
	            'kemeja',
	            'pakaian pria',
	            'l',
	            'hitam',
	            '2',
	            'Rp:300.000'
			);

echo 'nama :'.$baju_obj1->modelBaju().
	 '<br>categori :'.$baju_obj1->categoriBaju().
	 '<br> ukuran :'.$baju_obj1->ukuranBaju().
	 '<br>warna :'.$baju_obj1->warnaBaju().
	 '<br>stok :'.$baju_obj1->stokBaju().
	 '<br>price :'.$baju_obj1->priceBaju();

echo "<br><br>";

$baju_obj2 = new Baju(
	            'jilbab',
	            'pakaian wanita',
	            'xxl',
	            'biru',
	            '4',
	            'Rp:70.000'
			);

echo 'nama :'.$baju_obj2->modelBaju().
	 '<br>categori :'.$baju_obj2->categoriBaju().
	 '<br> ukuran :'.$baju_obj2->ukuranBaju().
	 '<br>warna :'.$baju_obj2->warnaBaju().
	 '<br>stok :'.$baju_obj2->stokBaju().
	 '<br>price :'.$baju_obj2->priceBaju();

echo "<br><br>";
?>