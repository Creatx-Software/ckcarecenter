<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        Team::truncate();

        $members = [
            [
                'name'       => 'Nimal Perera',
                'bio'        => 'Chief Operating Officer',
                'image_path' => null,
                'active'     => true,
            ],
            [
                'name'       => 'Sachini Jayawardena',
                'bio'        => 'Chief Creative Officer',
                'image_path' => null,
                'active'     => true,
            ],
            [
                'name'       => 'Kasun Rathnayake',
                'bio'        => 'Chief Marketing Officer',
                'image_path' => null,
                'active'     => true,
            ],
            [
                'name'       => 'Dilini Fernando',
                'bio'        => 'Chief Communication Officer',
                'image_path' => null,
                'active'     => true,
            ],
            [
                'name'       => 'Ruwan Seneviratne',
                'bio'        => 'Chief Legal Officer',
                'image_path' => null,
                'active'     => true,
            ],
        ];

        foreach ($members as $member) {
            Team::create($member);
        }
    }
}
