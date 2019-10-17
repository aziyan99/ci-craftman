<?php

class EzzySeeder extends Seeder
{

    private $table = 'ezzy';

    public function run()
    {
        $this->db->truncate($this->table);

        //seed records manually
        // $data = [
        //     'user_name' => 'admin',
        //     'password' => '9871'
        // ];
        // $this->db->insert($this->table, $data);

        //seed many records using faker
        $limit = 33;
        echo "seeding $limit data to table $this->table";

        for ($i = 0; $i < $limit; $i++) {
            echo ".";

            $data = array(
                'description' => $this->faker->unique()->word,
                'created_from_ip' => $this->faker->ipv4,
                'updated_from_ip' => $this->faker->ipv4,
                'date_created' => $this->faker->date($format = 'Y-m-d'),
                'date_updated' => $this->faker->date($format = 'Y-m-d'),
            );

            $this->db->insert($this->table, $data);
        }

        echo PHP_EOL;
    }
}
