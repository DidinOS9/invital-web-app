<?php

namespace App\Imports;

use App\Models\Tamu;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class VisitorImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $indexKe = 1;

        foreach ($collection as $row) {
            if ($indexKe > 1) {
                
                $data['id_suami'] = !empty($row[0]) ? $row[0] : '';
                $data['nama_tamu'] = !empty($row[1]) ? $row[1] : '';
                $data['status'] = !empty($row[4]) ? $row[4] : '';
                $data['kelamin'] = !empty($row[2]) ? $row[2] : '';
                $data['alamat'] = !empty($row[3]) ? $row[3] : '';
                
                Tamu::create($data);
                // dd($data);
                // dd($collection);
            }

            $indexKe++;
        }
    }
}
