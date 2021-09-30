<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
  public function run()
  {
    // $data = [
    //   [
    //     'nama'      => 'Ikhsan',
    //     'alamat'    => 'JL. ABC No.123',
    //     'created_at' => Time::now('Asia/Jakarta'),
    //     'updated_at' => Time::now('Asia/Jakarta')
    //   ],
    //   [
    //     'nama'      => 'Khoerul',
    //     'alamat'    => 'JL. BCA No.125',
    //     'created_at' => Time::now('Asia/Jakarta'),
    //     'updated_at' => Time::now('Asia/Jakarta')
    //   ],
    //   [
    //     'nama'      => 'Rohman',
    //     'alamat'    => 'JL. ACB No.125',
    //     'created_at' => Time::now('Asia/Jakarta'),
    //     'updated_at' => Time::now('Asia/Jakarta')
    //   ],
    // ];

    $faker = \Faker\Factory::create('id_ID');
    for ($i = 0; $i < 100; $i++) {
      $data = [
        'nama'      => $faker->name,
        'alamat'    => $faker->address,
        'created_at' => Time::createFromTimestamp($faker->unixTime()),
        'updated_at' => Time::now('Asia/Jakarta')
      ];
      $this->db->table('orang')->insert($data);
    }

    // Simple Queries
    // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

    // Using Query Builder
    // query insert satu data
    // $this->db->table('orang')->insert($data);

    // query insert banyak data
    // $this->db->table('orang')->insertBatch($data);
  }
}
