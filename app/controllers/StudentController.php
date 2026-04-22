<?php
namespace App\Controller;
require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';

use App\core\Controller;
use App\models\Student;
class StudentController extends Controller
{

    public function index()
    {
        $studentModel = new Student();
        $students = $studentModel -> getStudents();
        
        $this->view ('students.index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        $this->view ('students.create');
    }

    public function show(string $id)
    {
        $id = intval($id);
        $studentModel = new Student();
        $student = $studentModel->getStudent($id); 
        $this->view ('students.show', [
            'student' => $student
        ]);
    }
        public function edit(string $id)
    {
        $id = intval($id);
        $studentModel = new Student();
        $student = $studentModel->getStudent($id); 
        $this->view ('students.edit', [
            'student'=> $student
        ]);
    }

    public function store()
    {
        $studentModel = new Student();
        $studentModel->insert($_POST);
    }

    public function update(string $id)
    {
        $ud =intval($id);
        $studentModel = new Student();
        $studentModel->update($_POST, $id);
    }

    public function destroy(string $id)
    {
        $ud =intval($id);
        $studentModel = new Student();
        $studentModel->delete($id);
    }
}


?>