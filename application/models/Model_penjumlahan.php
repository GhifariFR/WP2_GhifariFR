<?php 
class Model_penjumlahan extends CI_model
{
    public $nilai1, $nilai2, $hasil;

    public function jumlah($nilai1, $nilai2)
    {
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}

?>