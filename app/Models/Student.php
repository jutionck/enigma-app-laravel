<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    public function get($id)
    {
        $students = collect([
            [
                "id" => 1,
                "npm" => "13753030",
                "name" => "Jution Candra Kirana",
                "email" => "jutionck@gmail.com"
            ],
            [
                "id" => 2,
                "npm" => "13753030",
                "name" => "Jution Candra Kirana",
                "email" => "jutionck@gmail.com"
            ],
            [
                "id" => 3,
                "npm" => "13753030",
                "name" => "Jution Candra Kirana",
                "email" => "jutionck@gmail.com"
            ]
        ]);

        return $students->firstWhere("id", $id);
    }
}
