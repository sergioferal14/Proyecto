<?php

namespace App\Exports;

use App\Models\Player;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection,WithHeadings
{
    use Exportable;

    protected $jugadores;

    public function __construct($jugadores = null)
    {
        $this->jugadores = $jugadores;
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Apellidos',
            'Posicion',
            'Dorsal',
            'Edad',
            'Peso',
            'Altura',
            'Observaciones',
            'Fecha Registro',
            'Fecha Edit'
        ];
    }

    public function collection()
    {
        
          return $this->jugadores;
         
    }
}
