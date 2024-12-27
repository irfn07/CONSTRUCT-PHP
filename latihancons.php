<?php

class benda {
  public $nama,
         $warna,
         $produser,
         $harga;
//ini disebut property, propery berguna untuk memberi nilai awal/nilai dasar pada objek dan masih dapat ditimpa dengan nilai yang nanti dibuat di dalam objek.


  public function __construct($nama="nama produk",$warna="warna produk",$produser="pembuat produk",$harga="harga produk"){
    $this->nama=$nama;
    $this->warna=$warna;
    $this->produser=$produser;
    $this->harga=$harga;
  }
  //ini adalah construct, construct digunakan untuk mempersingkat penulisan suatu nilai di dalam objek dengan hanya ditulis di dalam parameter functionnya,cara construct mempersingkat pengisian nilai adalah dengan menimpa nilai awal dari property menjadi nilai milik construct.
  
  
  
  public function label(){
    return "benda ini adalah $this->nama <br> warnanya $this->warna<br> benda ini dibuat oleh $this->produser<br> benda ini memiliki harga Rp: $this->harga";
  }
}
//function yang ini bertujuan untuk mengembalikan nilai, ketika label di panggil maka function ini akan mengembalikan nilai di atas,namun nilai di atas hanya akan di simpan,tidak di tampilkan,
//untuk menampilkannya kita harus menggunakan echo terlebih dahulu dan gunakan var_dump(); untuk melihat variabel dari setiap nilai

class buat{
  // kata Benda dalam parameter method sebelum $produk berfungsi agar method cetaknilai hanya bisa mencetak nilai yang di instansi dari class Benda
  public function cetaknilai(Benda $produk){
    $string ="{$produk->label()}";
    return $string;
  }
  //untuk menulis label dengan lebih mudah dan singkat dengan cara mengambil nilai dari label
}
$barang1 = new benda("sapu","putih","napoleon",0);

$mencetak = new buat;

echo $mencetak->cetaknilai($barang1);

//untuk menggunakan nilai dari property meskipun di luar property harus menggunakan $this->"nama property"dan tidak perlu menggunakan $ untuk nama property cukup $ sebelum this saja


//terimakasih telah melihat soruce code milik saya mohon maaf jika susah di pahami ^ ^
