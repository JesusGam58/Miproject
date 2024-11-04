<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jesusa;
use App\Models\Computer;

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/perros', function () {
    return view('perros');
});

Route::get('/pajaro', function () {
    return view('pajaro');
});

Route::get('/jijijija', function () {
    return view('jijijija');
});

Route::get('/gato', function () {
    return view('gato');
});

Route::get('/ardilla', function () {
    return view('ardilla');
});*/

Route::get('/perros', [jesusa::class, 'perros']);

Route::get('/gato', [jesusa::class, 'gato']);

Route::get('/jijijija', [jesusa::class, 'jijijija']);

Route::get('/pajaro', [jesusa::class, 'pajaro']);

Route::get('/ardilla', [jesusa::class, 'ardilla']);

//INSERTAR información en la tabla Computer



/*Route::get('/insertarvalor', function () {
    
    $computers = new Computer;
    $computers->model='Legion';
    $computers->mark='Lenovo';
    $computers->size=16;
    $computers->RAM=32;
    $computers->GPU=40;
    $computers->Processor=15;
    $computers->published_at='2024-10-27 13:11:00';
    $computers->is_active=true;
    $computers->save();

    return $computers;

});*/

/*Route::get('/insertarvalor', function () {
    
    $computers = new Computer;
    $computers->model='Victus';
    $computers->mark='HP';
    $computers->size=16;
    $computers->RAM=364;
    $computers->GPU=30;
    $computers->Processor=10
    $computers->published_at='2025-11-27 13:11:00';
    $computers->is_active=true;
    $computers->save();

    return $computers;

});

/*Route::get('/insertarvalor', function () {

    //se aplica filtro WHERE y se establece la columna y valor a encontrar
    //la sentencia devuelve el primer resultado que encuentre (FIRST)
    $computer = Computer::where('model','Legion')->first();
    return $computer;

});*/


/*Route::get('/insertarvalor', function () {

    $computers = Computer::all();
    return $computers;

});*/



Route::get('/insertarvalor', function () {

    //SE ESTABLECE UN FORMATO PARA EL DESPLIEGUE DE FECHA

    $computers = Computer::find(1);

//EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
return $computers->published_at->format('d-m-Y');
//EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
//return $computers->published_at->diffForHumans();

//AHORA NO DARÁ RESULTADO PORQUE LAS ENTRADAS DE format Y DE diffForHumans DEBEN 
//DE SER VALORES TIMESTAMP
      // el método delete borrará de la tabla el registro seleccionado
     
 });


 


