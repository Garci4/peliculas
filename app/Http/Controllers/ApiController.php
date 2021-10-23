<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;


class ApiController extends Controller
{
    /**
     * Returns all the existing movies.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_peliculas()
    {
        $peliculas = Pelicula::all();
        return $peliculas;
    }

    /**
     * Returns all the movies from a given year.
     * 
     * @param  $anio year of the movie
     * @return \Illuminate\Http\Response
     */
    public function get_peliculas_x_anio(Int $anio)
    {
        $peliculas = Pelicula::where('anio', $anio)->get();
        return $peliculas;
    }

    /**
     * Returns all the info from a given movie.
     * 
     * @param  $nombre name of the movie
     * @return \Illuminate\Http\Response
     */
    public function get_info(string $nombre)
    {
        $info = Pelicula::where('nombre', $nombre)->get();
        return $info;
    }

    /**
     * Returns the descripcion from a given movie.
     * 
     * @param  $nombre name of the movie
     * @return \Illuminate\Http\Response
     */
    public function get_descripcion(string $nombre)
    {
        $d = Pelicula::select('descripcion')->where('nombre', $nombre)->get();
        return $d;
    }
}
