<?php

use Illuminate\Database\Seeder;
use App\facultyModel;
class FacultyModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faculty = new facultyModel();
        $faculty->f_name = "shyam";
        $faculty->f_email = "shyam1.ss15@gmail.com";
        $faculty->save();
    }
}
