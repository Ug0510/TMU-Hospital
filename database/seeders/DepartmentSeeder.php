<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                'name' => 'Cardiology',
                'banner_image' => 'img/department/cardiology/cardiology-side-banner.jpg',
                'description' => 'The Cardiology department at our hospital is a specialized unit dedicated to providing top-notch cardiac care. Our state-of-the-art facilities include a fully equipped cardiac catheterization lab, advanced imaging technology, and a dedicated team of cardiologists and cardiac surgeons. We offer comprehensive diagnostic and therapeutic services, including coronary angiography, angioplasty, and bypass surgery. Our focus is on delivering personalized care to each patient, ensuring the best outcomes for both emergency and elective cardiac procedures. Additionally, our team is available 24/7 to handle any cardiac emergencies.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Neurology',
                'banner_image' => 'img/department/neurology/neurology-side-banner.jpg',
                'description' => "Our Neurology department is a center of excellence for the diagnosis and treatment of neurological disorders. We are equipped with the latest technology, including MRI, CT scans, and electroencephalograms (EEG), to provide accurate diagnoses. Our team of neurologists and neurosurgeons are experts in treating conditions such as epilepsy, stroke, multiple sclerosis, and Parkinson\’s disease. We offer both inpatient and outpatient services, ensuring that our patients receive the care they need at every stage of their treatment. Our multidisciplinary approach ensures comprehensive care tailored to the specific needs of each patient.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Orthopedics',
                'banner_image' => 'img/department/orthopedics/orthopedics-side-banner.jpg',
                'description' => 'The Orthopedics department at our hospital is committed to providing the highest level of care for patients with musculoskeletal conditions. Our services cover a wide range of orthopedic issues, from fractures and joint replacements to sports injuries and spinal disorders. We utilize the latest surgical techniques, including minimally invasive procedures, to ensure quick recovery and minimal discomfort. Our team of orthopedic surgeons, physical therapists, and rehabilitation specialists work together to create individualized treatment plans that cater to the unique needs of each patient, ensuring optimal outcomes and a return to active life.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pediatrics',
                'banner_image' => 'img/department/pediatrics/pediatrics-side-banner.jpg',
                'description' => 'Our Pediatrics department is designed to cater to the healthcare needs of children from birth to adolescence. We offer a child-friendly environment with a team of experienced pediatricians, nurses, and child care specialists dedicated to ensuring the health and well-being of our young patients. Services include routine check-ups, vaccinations, growth monitoring, and treatment for acute and chronic illnesses. We also provide specialized care for newborns and premature babies in our neonatal intensive care unit (NICU). Our focus is on providing compassionate care that supports the physical, emotional, and developmental needs of children.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Oncology',
                'banner_image' => 'img/department/oncology/oncology-side-banner.jpg',
                'description' => 'The Oncology department at our hospital is dedicated to the comprehensive care of patients with cancer. We offer cutting-edge treatments, including chemotherapy, radiation therapy, and immunotherapy, all tailored to the specific needs of each patient. Our team of oncologists, surgeons, and support staff work together to provide holistic care that addresses both the physical and emotional aspects of cancer treatment. We also offer palliative care services to enhance the quality of life for patients with advanced cancer. Our goal is to provide compassionate, patient-centered care that supports our patients through every stage of their cancer journey.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
