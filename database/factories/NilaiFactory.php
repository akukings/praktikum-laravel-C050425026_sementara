<?php

namespace Database\Factories;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Nilai>
 */
class NilaiFactory extends Factory
{
    public function definition(): array
    {
        $nilai = fake()->numberBetween(60, 100);

        if ($nilai >= 85) {
            $grade = 'A';
        } elseif ($nilai >= 75) {
            $grade = 'B';
        } elseif ($nilai >= 65) {
            $grade = 'C';
        } else {
            $grade = 'D';
        }

        return [
            'mahasiswa_id' => Mahasiswa::inRandomOrder()->first()->id,
            'mata_kuliah' => fake()->randomElement([
                'Pemrograman Web',
                'Basis Data',
                'Algoritma',
                'Pemrograman Python',
                'Sistem Informasi',
                'Jaringan Komputer'
            ]),
            'nilai' => $nilai,
            'grade' => $grade,
        ];
    }
}

