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
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in diam eget lectus tempor mattis. Phasellus quis lorem lectus. Etiam pulvinar erat mauris, sed pretium tortor convallis id. Phasellus nec congue ipsum. Praesent ullamcorper nibh a metus interdum maximus. In nulla felis, congue vitae eros nec, aliquet vehicula lacus. Morbi vulputate sed quam in aliquam. In et hendrerit ex. Nam gravida, justo eu congue vulputate, turpis lorem molestie felis, sit amet blandit ipsum augue viverra erat. Suspendisse potenti. Nulla vestibulum quam ligula, vitae tempor tellus gravida id. Aenean non sodales ex.  </p> <p> Aliquam ex turpis, elementum non sodales vel, suscipit vel nunc. Suspendisse eget diam varius, molestie tellus a, bibendum urna. Aliquam eu ipsum enim. Proin sed auctor lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas blandit risus vel pretium ornare. Aliquam a volutpat dolor. Vestibulum eget lorem cursus dui auctor sollicitudin eget a dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin consectetur ex non commodo viverra. Pellentesque aliquet dui diam, ac fermentum ligula lacinia non. </p> <p>Donec interdum ligula vel luctus efficitur. Pellentesque tortor elit, sodales eget purus in, sagittis accumsan odio. Fusce quis augue et ligula blandit aliquet. Maecenas placerat, felis sed imperdiet rutrum, neque tellus blandit justo, et facilisis lorem sapien ac ante. Duis enim dui, vestibulum et placerat vitae, tincidunt at velit. Phasellus sit amet mauris porta enim interdum rhoncus. Maecenas facilisis, ex sit amet efficitur tincidunt, nunc ex consequat nisl, vitae rutrum felis velit et justo. </p>',
            'styling' => '123'
        ]);
    }
}
