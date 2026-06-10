<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CareHome;

class CareHomeSeeder extends Seeder
{
    public function run(): void
    {
        CareHome::truncate();

        $careHomes = [
            [
                'title'       => 'Care Home | Pannipitiya',
                'subtitle'    => 'Admission Open',
                'location'    => 'Pannipitiya',
                'description' => 'Our Pannipitiya care home offers professional nursing and assisted living services in a warm, home-like environment with round-the-clock medical support.',
                'image_path'  => null,
                'contact_no'  => '+94773768767',
                'badge_text'  => 'Admission Open',
                'is_public'   => true,
            ],
            [
                'title'       => 'Care Home | Kasbawa',
                'subtitle'    => 'Admission Open',
                'location'    => 'Kasbawa',
                'description' => 'Located in Kasbawa, our care home provides compassionate elderly care and nursing services tailored to the individual needs of each resident.',
                'image_path'  => null,
                'contact_no'  => '+94773768767',
                'badge_text'  => 'Admission Open',
                'is_public'   => true,
            ],
            [
                'title'       => 'Care Home | Athurugiriya',
                'subtitle'    => 'Admission Open',
                'location'    => 'Athurugiriya',
                'description' => 'Our Athurugiriya branch delivers high-quality home nursing and chronic care services within a safe, comfortable, and professionally managed setting.',
                'image_path'  => null,
                'contact_no'  => '+94773768767',
                'badge_text'  => 'Admission Open',
                'is_public'   => true,
            ],
            [
                'title'       => 'Care Home | Matara',
                'subtitle'    => 'Admission Open',
                'location'    => 'Matara',
                'description' => 'Serving the southern region, our Matara care home brings expert nursing care and elderly support services to families across the area.',
                'image_path'  => null,
                'contact_no'  => '+94773768767',
                'badge_text'  => 'Admission Open',
                'is_public'   => true,
            ],
        ];

        foreach ($careHomes as $home) {
            CareHome::create($home);
        }
    }
}
