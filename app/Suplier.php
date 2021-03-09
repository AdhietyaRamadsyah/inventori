<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Suplier extends Model
{
    use AutoNumberTrait;

    protected $table ='supliers';
    protected $guarded= [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_suplier' => [
                'format' => function () {
                    return 'ABS/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
}