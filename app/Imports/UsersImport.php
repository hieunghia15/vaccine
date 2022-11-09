<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        return new User([
            'phone'     => $row[0],
            'fullname'    => $row[1],
            'password' => Hash::make($row[2]),
            'day_of_birth'    => $row[3],
            'gender'    => $row[4],
            'address'    => $row[5],
            'email'    => $row[6],
            'identification'    => $row[7],
            'ward_id'    => $row[8],
            'nationality_id'    => $row[9],
            'ethnic_id'    => $row[10],
        ]);
    }
}
