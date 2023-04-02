<?php
class product {
    public $name;
    public $price;
    public $discount;

    function getPrice(){
        return $this->price;
    }
    function setPrice($price){
        $this->price=$price;

    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    function getDiscount(){
        return $this->discount;
    }
    function setDiscount($discount){
        $this->discount = $discount;
    }

}
/**
*
*/
class CDMusic extends product
{
     public $artist;
     public $genre;

     function __construct($name="nama", $price="harga", $discount="diskon"){


     }

     function getArtist(){
         return $this->artist;
     }
     function setArtist($artist){
         $this->artist = $artist;
     }
     function getGenre(){
         return $this->genre;
     }
     function setGenre($genre){
         $this->genre = $genre;
     }
     function setPrice($price){
         $this->price = $price;
     }
     function getPrice(){
         $harga = $this->price;
         $ppn = ((10/100) * $this->price);
         $discount = ((5/100) * $this->price);
         return ($harga + $ppn) - $discount;
         }
         function setDiscount($discount){
             $this->discount = $discount;
         }


}
/**
*
*/
class CDRack extends product
{
    public $capacity;
    public $model;

     function getCapacity(){
         return $this->capacity;
     }
     function setCapacity($capacity){
         $this->capacity = $capacity;
     }
     function getModel(){
         return $this->model;
     }
     function setModel($model){
         $this->model = $model;
     }
     function setPrice($price){
         $this->price = $price;
     }
     function getPrice(){
         $harga = $this->price;
         $tambahan = ((15 / 100) * $this->price);
         return $harga + $tambahan;
     }
}
$beli = new product();
$beli_cdm = new CDMusic();
$beli_cdr = new CDRack();

$beli->setName("CD lagu");
$beli->setPrice(400000);
$beli->setDiscount("Discount saat ini : 1. CDMusic = 5% <br/>
                                        2. CDRack = 0% (Tidak ada discount)");
                                        
echo "Nama Product : " . $beli->getName() . "<br/>";
echo "Harga : Rp. " . $beli->getPrice() . ",-<br/>";
echo $beli->getDiscount() . "<br/><hr/>";

$beli_cdm->setArtist("One Direction");
$beli_cdm->setGenre("Pop");
$beli_cdm->setDiscount("5%");
$beli_cdm->setPrice(400000);

echo "---SELAMAT DATANG DI CDMUSIC--- <br/>";
echo "Nama Product : " . $beli->getName() . "<br/>";
echo "Artis : " . $beli_cdm->getArtist() . "<br/>";
echo "Genre : " . $beli_cdm->getGenre() . "<br/>";
echo "Selamat anda mendapatkan Discount Sebesar " . $beli_cdm->getDiscount() ."<br/>";
echo "Total Harga : Rp." . $beli_cdm->getPrice() . ",-<br/>Harga diatas sudah termasuk PPN sebesar 10% dan Discount 5%<br/><br/><hr/>";

$beli_cdr->setCapacity("600mb");
$beli_cdr->setModel("Keluaran terbaru album pertama");
$beli_cdr->setPrice(400000);

echo "---SELAMAT DATANG DI CDRACK--- <br/>";
echo "Kapasitas : " . $beli_cdr->getCapacity() . "<br/>";
echo "Model : " . $beli_cdr->getModel() . "<br/>";
echo "Mohon maaf anda tidak mendapatkan Discount <br/>";
echo "Total Harga : Rp." . $beli_cdr->getPrice() . ",-<br/>Harga diatas sudah termasuk ppn sebesar 15% dan tidak mendapatkan discount";

?>