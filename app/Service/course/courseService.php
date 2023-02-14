<?php

namespace App\Service\Course;

use App\Models\Course;

use App\Repository\Course\courseRepositoryInterface;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;

class courseService implements courseServiceInterface
{

    private $courseRepository;

    /**
     * Constructor
     *
     * @param courseRepositoryInterface $courseRepository
     */
    public function __construct(courseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function getAllCourse()
    {
        $this->courseRepository->getAllCourse();
    }

    public function store($request)
    {
        $data = [
            'course_id' => $request->course_id,
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'course_duration ' => $request->course_duration,
        ];

        $this->courseRepository->store($data);

    }

    


}
