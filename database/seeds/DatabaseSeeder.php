<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subject::class)->times(20)->create();


        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,20)->create()->each(function(App\User $user){//Creo Usuarios
            $subject = App\Subject::find(random_int(1,20));
            factory(App\Section::class,3)->create(['subject_id' => $subject->id, 'user_id' => $user->id])->each(function(App\Section $section) use ($subject){//Creo Secciones
                $NTest = 1;
                factory(App\Test::class,$subject->NTests)->create(['section_id' => $section->id, 'NTest' => $NTest++])->each(function(App\Test $test){//Creo Parciales

                    factory(App\Evaluation::class, random_int(2,5))->create(['test_id' => $test->id])->each(function(App\Evaluation $evaluation){//Creo Evaluaciones

                        factory(App\Revisions::class, random_int(1,10))->create(['evaluation_id' => $evaluation->id]);//Creo Revisiones
                    });
                });
            });
        });
    }
}
