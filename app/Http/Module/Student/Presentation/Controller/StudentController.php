<?php

namespace App\Http\Module\Student\Presentation\Controller;

use App\Http\Module\Student\Application\Services\CreateStudent\CreateStudentRequest;
use App\Http\Module\Student\Application\Services\CreateStudent\CreateStudentService;
use Illuminate\Http\Request;

class StudentController
{
    public function __construct(
        private CreateStudentService $create_student_service
    )
    {
    }

    public function createStudent(Request $request){
        // dd($request);
        $request = new CreateStudentRequest(
            $request->input('nama'),
            $request->input('price'),
            $request->input('description'),
        );

        return $this->create_student_service->execute($request);
    }
}
