<?php

namespace App\Http\Module\Student\Application\Services\CreateStudent;

use App\Http\Module\Student\Domain\Model\Student;
use App\Http\Module\Student\Infrastructure\Repository\StudentRepository;

class CreateStudentService
{

    public function __construct(
        private StudentRepository $student_repository
    )
    {
    }

    public function execute(CreateStudentRequest $request){
        $student = new Student(
            $request->nama,
            $request->price,
            $request->description,
        );

        $this->student_repository->save($student);
    }
}
