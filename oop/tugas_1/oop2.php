<?php
class Food 
	{
	public $nama,
		   $categori,
		   $price;

	public function __construct($nama, $categori, $price) 
	{
		$this->nama = $nama;
		$this->categori = $categori;
		$this->price = $price;
	}

	public function namaFood() 
	{
		return $this->nama;
	}

	public function categoriFood() 
	{
		return $this->categori;
	}

	public function priceFood() 
	s{
		return $this->price;
	}
}

$food_obj = new Food('bakwan', 'gorengan', '500');
echo 'nama  :' . $food_obj->namaFood() . '<br>categori  :' . $food_obj->categoriFood() . '<br>harga  :' . $food_obj->priceFood();

echo '<br> <br> ';

$food_obj1 = new Food('renginan', 'makanan ringan', '0');
echo 'nama  :' . $food_obj1->namaFood() . '<br>categori  :' . $food_obj1->categoriFood() . '<br> harga  :' . $food_obj1->priceFood();

?>