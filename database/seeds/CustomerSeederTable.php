<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new Customer();
        $user1->name = 'Daniel Marques';
        $user1->email = 'dnl.flow@hotmail.com';
        $user1->cpf_cnpj = '69915488041';
        $user1->city_id = 4175;
        $user1->category_id = 1;
        $user1->save();

        $user2 = new Customer();
        $user2->name = 'Mike Thomas';
        $user2->email = 'mike@teste.com.br';
        $user2->cpf_cnpj = '01845655894';
        $user2->city_id = 4175;
        $user2->category_id = 2;
        $user2->save();

        $user3 = new Customer();
        $user3->name = 'Raimundo Bernardo da Cruz';
        $user3->email = 'raimundo1990@teste.com.br';
        $user3->cpf_cnpj = '76498518000320';
        $user3->city_id = 4004;
        $user3->category_id = 3;
        $user3->save();

        $user4 = new Customer();
        $user4->name = 'Vitor Caleb Eduardo Lopes';
        $user4->email = 'victor_caleb10@teste.com.br';
        $user4->cpf_cnpj = '27953981000148';
        $user4->city_id = 4004;
        $user4->category_id = 4;
        $user4->save();

        $user5 = new Customer();
        $user5->name = 'Bruno Anthony Igor Carvalho';
        $user5->email = 'brunocarvalho@teste.com.br';
        $user5->cpf_cnpj = '56801652000180';
        $user5->city_id = 4004;
        $user5->category_id = 2;
        $user5->save();

        $user6 = new Customer();
        $user6->name = 'Marcelo José Diego Costa';
        $user6->email = 'marcelojose@teste.com.br';
        $user6->cpf_cnpj = '83457209000106';
        $user6->city_id = 4004;
        $user6->category_id = 2;
        $user6->save();

        $user7 = new Customer();
        $user7->name = 'Severino Osvaldo Moura';
        $user7->email = 'severinomoura@teste.com.br';
        $user7->cpf_cnpj = '92457713000105';
        $user7->city_id = 4175;
        $user7->category_id = 1;
        $user7->save();

        $user8 = new Customer();
        $user8->name = 'Bryan Caio Aragão';
        $user8->email = 'bryan@teste.com.br';
        $user8->cpf_cnpj = '93961842000190';
        $user8->city_id = 4175;
        $user8->category_id = 4;
        $user8->save();

        $user9 = new Customer();
        $user9->name = 'Ian Theo Caio Aragão';
        $user9->email = 'ian.caio@teste.com.br';
        $user9->cpf_cnpj = '66369838000165';
        $user9->city_id = 4175;
        $user9->category_id = 4;
        $user9->save();

        $user10 = new Customer();
        $user10->name = 'Iago Kevin Novaes';
        $user10->email = 'iago@teste.com.br';
        $user10->cpf_cnpj = '37449671000144';
        $user10->city_id = 4004;
        $user10->category_id = 4;
        $user10->save();

        $user11 = new Customer();
        $user11->name = 'Edson Lucca Figueiredo';
        $user11->email = 'edson@hotmail.com';
        $user11->cpf_cnpj = '45097650000135';
        $user11->city_id = 4004;
        $user11->category_id = 2;
        $user11->save();

        $user12 = new Customer();
        $user12->name = 'Tiago Levi Aparício';
        $user12->email = 'tiago@teste.com';
        $user12->cpf_cnpj = '98139792000184';
        $user12->city_id = 4004;
        $user12->category_id = 1;
        $user12->save();

        $user13 = new Customer();
        $user13->name = 'Lúcia Alice Pinto';
        $user13->email = 'alice@teste.com.br';
        $user13->cpf_cnpj = '11059767000102';
        $user13->city_id = 4004;
        $user13->category_id = 3;
        $user13->save();

        $user14 = new Customer();
        $user14->name = 'Osvaldo Manuel Anthony Assis';
        $user14->email = 'osvaldo@teste.com.br';
        $user14->cpf_cnpj = '24485941000120';
        $user14->city_id = 4004;
        $user14->category_id = 4;
        $user14->save();

        $user15 = new Customer();
        $user15->name = 'Emanuelly Sônia Moreira';
        $user15->email = 'emanuelly@hotmail.com';
        $user15->cpf_cnpj = '77992317000186';
        $user15->city_id = 4004;
        $user15->category_id = 2;
        $user15->save();

        $user16 = new Customer();
        $user16->name = 'Mariana Antônia Baptista';
        $user16->email = 'mariana@hotmail.com';
        $user16->cpf_cnpj = '85035374000103';
        $user16->city_id = 4175;
        $user16->category_id = 1;
        $user16->save();

    }
}
