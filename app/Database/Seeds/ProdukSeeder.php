<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder{

    public function run(){
        $data = [
            [
            'nama_produk' => 'baju',
            'deskripsi produk' => 'baju panjang'
            ],
            [
            'nama_produk' => 'celana',
            'deskripsi produk' => 'celana panjang'
            ],
    ];
    $this->db->table('produk')->insertBatch($data);
    }
}