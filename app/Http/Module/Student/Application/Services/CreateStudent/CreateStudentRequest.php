<?php

namespace App\Http\Module\Student\Application\Services\CreateStudent;

class CreateStudentRequest
{
    public function __construct(
        public string $nama,
        public float $price,
        public string $description,
    )
    {
    }
}
