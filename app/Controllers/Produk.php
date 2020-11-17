<?php namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\ProdukModel;

class Produk extends BaseController
{
	public function index()
	{
        $model = new ProdukModel();
        $data['produk'] = $model->getProduk();

        dd($data);
    }


}