<?php
/**
 * User:sun
 *2020-2020/5/30-11:58 下午
 */

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

/**
 * Note:
 */
class ArrayExport implements FromArray,WithHeadings,ShouldAutoSize
{

    protected $array;
protected $heads;

    public function __construct(array $array,array $heads=[])
    {
        $this->array=$array;
        $this->heads=$heads;

    }


    public function array(): array
    {
        return $this->array;
    }

    public function headings(): array
    {
        return  $this->heads;

    }
}
