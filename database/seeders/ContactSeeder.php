<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'address' => 'Jl. Riung Ampuh No.3, Riung Bandung, Bandung City 40295, West Java, Indonesia',
            'email' => 'rcc.conference.id@gmail.com',
            'phone' => '+62 898-7058-643',
            'maps_embed' => '!1m14!1m8!1m3!1d3831.6385937978234!2d107.6824629!3d-6.9426923!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2bce89a2a5d%3A0xbbe514b98cce6516!2sJl.%20Riung%20Ampuh%20No.3%2C%20Cisaranten%20Kidul%2C%20Kec.%20Gedebage%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040295!5e1!3m2!1sid!2sid!4v1733450394231!5m2!1sid!2sid',
        ]);
    }
}