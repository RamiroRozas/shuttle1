<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\ruta::create([
            'cod_ruta' => 'r1',
            'nombre'  => 'Ollanta->Machuppichu',
        ]);

         App\punto::create([
            'cod_punto' => 'ps1',
            'nombre'  => 'Ollanta',
        ]);

        App\hotel::create([
            'cod_hotel' => 'h1',
            'nombre'  => 'San Agustin',
            'direccion'=>'Urb. San Miguel',
            'telefono'=>'998282892',
            'email'=>'sanAgustin@gmail.com',
        ]);

        App\aeropuerto::create([
            'cod_aeropuerto' => 'h1',
            'nombre'  => 'San Agustin',
            'direccion'=>'Urb. San Miguel',
        ]);  

        App\estacionTren::create([
            'cod_estacion' => 'h1',
            'nombre'  => 'San Agustin',
            'direccion'=>'Urb. San Miguel',
        ]);

        App\terminal::create([
            'cod_terminal' => 't1',
            'nombre'  => 'Tio',
            'direccion'=>'Urb. Tio',
        ]);

        App\reserva::create([
            'cod_reserva' => 't1',
            'fechaReserva'  => 'Tio',
            'precioTotalGeneral'=>'Urb. Tio',
        ]);

         App\detalleReserva::create([
            'fecha' => '02/12/2015',
            'hora_salida'  => '13:04 pm',
            'cantidad'=>'2',
            'precioTotalReserva'=>'140',
        ]);      

        App\pasajero::create([
            'cod_pasajero' => 'p1',
            'tipoDocumento'  => 'DNI',
            'nroDocumento'=>'45873564',
            'nombres'=>'Oscar',
            'apellidos'=>'Condori',
            'sexo'=>'masculino',
            'nacionalidad'=>'Peru',
            'fechaNacimmiento'=>'24/04/1990',
            'telefono'=>'983475647',
            'email'=>'oscarsdk@gmail.com',
        ]);
        
        App\ticket::create([
            'cod_ticket' => 'tk1',
            'codigoQR'  => 'QRCODIGO0001',
            'precioUnitario'=>'120',
        ]);

        App\proveedor::create([
            'cod_proveedor' => 'prov01',
            'razonSocial'  => 'Txi S.R.L',
            'telefono'=>'08436575',
            'responsable'=>'Jose Salazar',
            'direccion'=>'Urb. Manuel Prado',
        ]);  

        App\conductor::create([
            'cod_conductor' => 'c1',
            'nombre'  => 'Edwin Sarate',
            'direccion'=>'Urb. Santiago',
            'dni'=>'57385832',
            'telefono'=>'08483636',
            'edad'=>'40',
        ]);

        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
