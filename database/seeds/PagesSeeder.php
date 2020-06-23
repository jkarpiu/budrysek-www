<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_pages')->insert([
            'name' => 'about',
            'displayName' => 'O nas',
            'backgroundPhoto' => '',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in diam eget lectus tempor mattis. Phasellus quis lorem lectus. Etiam pulvinar erat mauris, sed pretium tortor convallis id. Phasellus nec congue ipsum. Praesent ullamcorper nibh a metus interdum maximus. In nulla felis, congue vitae eros nec, aliquet vehicula lacus. Morbi vulputate sed quam in aliquam. In et hendrerit ex. Nam gravida, justo eu congue vulputate, turpis lorem molestie felis, sit amet blandit ipsum augue viverra erat. Suspendisse potenti. Nulla vestibulum quam ligula, vitae tempor tellus gravida id. Aenean non sodales ex.  </p>',
            'styling' => '123'
        ]);
    }
}

