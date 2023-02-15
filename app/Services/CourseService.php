<?php
namespace App\Services;

use App\Contracts\Dao\CourseDaoInterface;
use App\Contracts\Services\CourseServiceInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class CourseService implements CourseServiceInterface
{
    private $courseDao;

    /**
     * Constructor
     *
     * @param CourseDaoInterface $courseDao
     */
    public function __construct(CourseDaoInterface $courseDao)
    {
        $this->courseDao = $courseDao;
    }

    public function getAllCourses()
    {
        return $this->courseDao->getAllCourses();
    }
    /**
     * Register User function
     *
     * @param \Request $request
     * @return void
     */


    public function create($request)
    {
        $data = $this->getData($request);
        $this->courseDao->store($data);
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

        $this->courseDao->store($data);
    }

    private function getData($request)
    {
        return [
            'course_id' => $request->course_id,
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'course_duration ' => $request->course_duration,
        ];
    }
    /**
     * Show User Data function
     *
     * @param int $id
     * @return void
     */
    public function profile($id)
    {
        return $this->courseDao->profile($id);
    }

    /**
     * Edit User function
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        return $this->courseDao->edit($id);
    }

    /**
     * Update User function
     *
     * @param \Request $req
     * @param int $id
     * @return void
     */
    public function update($req, $id)
    {
        $data = $this->getUpdateData($req);
        return $this->courseDao->update($data, $id);
    }

    private function getUpdateData($req)
    {
        return [
            'name' => $req->name,
            'email' => $req->email,
            'role' => $req->role,
        ];
    }

    public function delete($id)
    {
        return $this->courseDao->delete($id);
    }

}
