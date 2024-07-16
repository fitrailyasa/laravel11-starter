<?php

namespace App\Imports;

use App\Models\Franchise;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class FranchiseImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        $name = $row[1];
        $img = $row[2] ?? null;
        $desc = $row[3] ?? null;

        $checkFranchise = Franchise::where('name', $name)->first();

        if (!$checkFranchise) {
            return new Franchise([
                'id' => Str::uuid(),
                'name' => $name,
                'img' => $img,
                'desc' => $desc,
            ]);
        }

        return null;
    }

    public function startRow(): int
    {
        return 3;
    }
    
}
