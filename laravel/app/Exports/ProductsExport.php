<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public $products;

    public function __construct($products)
    {
        $this->products = $products;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->products;
    }

    public function headings(): array
    {
        return [
            'id',
            'title',
            'description',
            'image'
        ];
    }

    public function query()
    {
        return Product::query();
    }
}
