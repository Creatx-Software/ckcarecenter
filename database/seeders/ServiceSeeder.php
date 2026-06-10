<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // Optional: disable foreign key checks (usually not needed unless you have dependencies)
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing records
        Service::truncate();

        // Re-enable if you disabled above
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $services = [
            [
                'title'       => 'Professional Home Nursing Services',
                'description' => 'Receive expert nursing care in the comfort of your own home, delivered by qualified professionals committed to your health, dignity, and peace of mind.',
                'image_path'  => null,
                'title_slug'  => 'professional-home-nursing-services',
                'is_public'   => true,
            ],
            [
                'title'       => 'Elderly Care and Assisted Living Support',
                'description' => 'Compassionate, person-centred support for elderly individuals, helping them maintain independence and quality of life while receiving the assistance they need every day.',
                'image_path'  => null,
                'title_slug'  => 'elderly-care-and-assisted-living-support',
                'is_public'   => true,
            ],
            [
                'title'       => 'Post-Operative and Post-Surgical Care',
                'description' => 'Dedicated recovery support following surgery, with skilled nursing professionals monitoring your progress, managing wound care, and guiding you safely through rehabilitation.',
                'image_path'  => null,
                'title_slug'  => 'post-operative-and-post-surgical-care',
                'is_public'   => true,
            ],
            [
                'title'       => 'Chronic Illness Management',
                'description' => 'Ongoing, structured care for individuals living with long-term health conditions, focused on symptom management, medication adherence, and improving overall quality of life.',
                'image_path'  => null,
                'title_slug'  => 'chronic-illness-management',
                'is_public'   => true,
            ],
            [
                'title'       => 'Nursing Assistant and Caregiver Services',
                'description' => 'Trained nursing assistants and caregivers providing reliable daily support — from personal hygiene and mobility assistance to companionship and household help.',
                'image_path'  => null,
                'title_slug'  => 'nursing-assistant-and-caregiver-services',
                'is_public'   => true,
            ],
            [
                'title'       => 'Medical Consultations and Health Monitoring',
                'description' => 'Professional medical consultations combined with continuous health monitoring to keep track of vital signs, detect changes early, and ensure timely, informed care decisions.',
                'image_path'  => null,
                'title_slug'  => 'medical-consultations-and-health-monitoring',
                'is_public'   => true,
            ],
        ];

        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }

        $this->command->info('✅ Services seeded successfully! (' . count($services) . ' records)');
    }
}