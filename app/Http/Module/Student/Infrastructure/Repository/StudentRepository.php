<?php

namespace App\Http\Module\Student\Infrastructure\Repository;

use App\Http\Module\Student\Domain\Model\Student;
use App\Http\Module\Student\Domain\Services\Repository\StudentRepositoryInterface;
use Illuminate\Support\Facades\DB;

class StudentRepository implements StudentRepositoryInterface
{
    public function save(Student $student)
    {
        DB::table('students')->upsert(
            [
                'nama' => $student->nama,
                'price' => $student->price,
                'description' => $student->description,
            ],'nama'
        );
    }
}
