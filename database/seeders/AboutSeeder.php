<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'description_history' => 'The company Research Collaborations Community (RCC) was established on May 25, 2019. Based at Jl. Riung Ampuh No.3, Riung Bandung, Bandung City 40295, West Java, Indonesia. The association aims to gather individuals who share a common interest in research and scientific collaboration. Since its establishment, the Research Collaboration Community Association has endeavored to become a forum for researchers and academics to share knowledge, resources, and innovative ideas to encourage the advancement of science and technology in Indonesia.',
            'description_vision' => 'Research is often described as a process of investigation that is conducted actively, diligently, and systematically, with the aims to discover, interpret, and revise facts. The role of the researcher in research is as a planner, data collector, analyzer, and finally as the originator of the research. To conduct research, collaboration between researchers is needed, in order to obtain quality research results.  Research Collaboration Community is an organization of scholars and researchers from various fields of science, as a medium for collaborating, exchanging ideas, and sharing knowledge,in order to improve the quantity and quality of research results.',
            'description_mission1' => 'Fostering and developing quality research.',
            'description_mission2' => 'Fostering and developing quantitative and quantitative and qualitative research methods.',
            'description_mission3' => 'Increasing the role of research both directly and as as a support for other sciences in order to contribute to improve human resources for the success of development of the nation and state based on Pancasila and 1945 Constitution.',
            'description_ceo' => 'Mr. Firman Sukono, M.M. M.Si.',
            'description_secretary' => 'Mr. Aceng Sambas. M.Sc.',
            'description_treasurer' => 'Mr. Djufri Liga, S.E., M.M.',
            'description_supervisor' => 'Mr. Ruly Budiono, M.Sc.',
            'description_member1' => 'Mr. Andri Saputra',
            'description_member2' => 'Mr. Agung Prabowo, M.Si.',
        ]);
    }
}