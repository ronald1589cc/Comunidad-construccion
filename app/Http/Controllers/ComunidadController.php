<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ComunidadController extends Controller
{
    /**
     * Muestra la página de Consorcios para Licitaciones & Obras por Impuestos.
     */
    public function consorcios(): View
    {
        return view('pages.comunidades.consorcios.index');
    }

    /**
     * Muestra la página de Plantel Profesional Técnico.
     */
    public function plantelProfesional(): View
    {
        return view('pages.comunidades.plantel.index');
    }

    /**
     * Muestra la página de Proveedores: Materiales, Bienes, Servicios y Subcontratos.
     */
    public function proveedores(): View
    {
        return view('pages.comunidades.proveedores.index');
    }
}
