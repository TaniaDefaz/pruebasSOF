// tests/Unit/DocenteTest.php
<?php

use PHPUnit\Framework\TestCase;
use App\Models\Docente;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DocenteTest extends TestCase
{
    use RefreshDatabase;

    public function testGetFullNameAttribute()
    {
        // Crear una instancia de Docente con atributos de nombre y apellido
        $docente = new Docente([
            'nombre' => 'John',
            'apellido' => 'Doe'
        ]);

        // Verificar que el método getFullNameAttribute retorne el nombre completo correctamente
        $this->assertEquals('John Doe', $docente->full_name);
    }
}
