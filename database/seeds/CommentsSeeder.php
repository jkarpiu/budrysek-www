<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'name' => "test31",
            'email' => 'test@test123.pl',
            'articleID' => '1',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in diam eget lectus tempor mattis. Phasellus quis lorem lectus. Etiam pulvinar erat mauris, sed pretium tortor convallis id. Phasellus nec congue ipsum. Praesent ullamcorper nibh a metus interdum maximus. In nulla felis, congue vitae eros nec, aliquet vehicula lacus. Morbi vulputate sed quam in aliquam. In et hendrerit ex. Nam gravida, justo eu congue vulputate, turpis lorem molestie felis, sit amet blandit ipsum augue viverra erat. Suspendisse potenti. Nulla vestibulum quam ligula, vitae tempor tellus gravida id. Aenean non sodales ex.  </p>',
        ]);

        DB::table('comments')->insert([
            'name' => 'test21',
            'email' => 'test@test321.pl',
            'articleID' => '1',
            'content' => '<p> 213123 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in diam eget lectus tempor mattis. Phasellus quis lorem lectus. Etiam pulvinar erat mauris, sed pretium tortor convallis id. Phasellus nec congue ipsum. Praesent ullamcorper nibh a metus interdum maximus. In nulla felis, congue vitae eros nec, aliquet vehicula lacus. Morbi vulputate sed quam in aliquam. In et hendrerit ex. Nam gravida, justo eu congue vulputate, turpis lorem molestie felis, sit amet blandit ipsum augue viverra erat. Suspendisse potenti. Nulla vestibulum quam ligula, vitae tempor tellus gravida id. Aenean non sodales ex.  </p>',
        ]);

        DB::table('comments')->insert([
            'name' => 'test11',
            'email' => 'test@test321.pl',
            'articleID' => '2',
            'content' => '<p> 21331231123 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in diam eget lectus tempor mattis. Phasellus quis lorem lectus. Etiam pulvinar erat mauris, sed pretium tortor convallis id. Phasellus nec congue ipsum. Praesent ullamcorper nibh a metus interdum maximus. In nulla felis, congue vitae eros nec, aliquet vehicula lacus. Morbi vulputate sed quam in aliquam. In et hendrerit ex. Nam gravida, justo eu congue vulputate, turpis lorem molestie felis, sit amet blandit ipsum augue viverra erat. Suspendisse potenti. Nulla vestibulum quam ligula, vitae tempor tellus gravida id. Aenean non sodales ex.  </p>',
        ]);
    }
}
