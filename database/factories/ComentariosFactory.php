<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentarios>
 */
class ComentariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id_articulo = Articulo::all()->pluck('id')->toArray();
        return [
            'articulo_id'=> $this->faker->randomElement($id_articulo),
            'comentario' => $this->faker->text($maxNbChars = 50),
        ];
    }
}
