<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\Alumno;
use App\Http\Controllers\AlumnoController;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class AlumnoControllerUnitTest extends TestCase
{
    public function test_probar_validacion_falla_para_crear_Alumnos()
    {
   
    $controller= new AlumnoController();
    $request=Request::create('/alumnos','POST',[
        'nombre' => '',
        'apellido' => '',
        'email' => '',
        'edad' => ''
    ]);
    $this->expectException(ValidationException::class);
    $controller->store($request);
    }
    public function test_probar_validacion_correcta_para_crear_Alumnos()
    {
    $controller= new AlumnoController();
    $request=Request::create('/alumnos','POST',[
        'nombre' => 'Carlos',
        'apellido' => 'Mendez',
        'email' => 'cmendez@unicah.edu',
        'edad' => '23'
    ]);
    $this->expectException(ValidationException::class);
  
    $response=$controller->store($request);
    $this->assertTrue($response->isRedirect(route('alumnos.index')));
    }
    



}
