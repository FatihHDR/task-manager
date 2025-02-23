<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Module5CodelabFactory extends Factory
{
    protected $model = \App\Models\Module5Codelab::class;

    public function definition()
    {
        return [
            'student_name' => $this->faker->name,
            'task_type' => $this->faker->randomElement(['Assignment', 'Project', 'Quiz']),
            'description' => $this->faker->sentence,
            'codelab_grade' => $this->faker->numberBetween(0, 100),
            'due_date_time' => $this->faker->dateTimeBetween('now', '+1 month'),
            'location' => $this->faker->address,
            'materials' => json_encode(['material1', 'material2']),
            'status' => $this->faker->randomElement(['pending', 'completed']),
            'priority' => $this->faker->numberBetween(1, 5),
            'course' => $this->faker->word,
            'notes' => $this->faker->paragraph,
            'completed_date' => $this->faker->optional()->dateTimeBetween('now', '+1 month'),
        ];
    }
}
