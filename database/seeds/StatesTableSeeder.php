<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'name' => 'acre',
            'name_visible' => 'Acre',
            'state_cod' => 'AC',
        ]);


        State::create([
            'name' => 'alagoas',
            'name_visible' => 'Alagoas',
            'state_cod' => 'AL',
        ]);


        State::create([
            'name' => 'amazonas',
            'name_visible' => 'Amazonas',
            'state_cod' => 'AM',
        ]);

        State::create([
            'name' => 'amapa',
            'name_visible' => 'Amapá',
            'state_cod' => 'AP',
        ]);

        State::create([
            'name' => 'bahia',
            'name_visible' => 'Bahia',
            'state_cod' => 'BA',
        ]);

        State::create([
            'name' => 'ceara',
            'name_visible' => 'Ceará',
            'state_cod' => 'CE',
        ]);

        State::create([
            'name' => 'distrito-federal',
            'name_visible' => 'Distrito Federal',
            'state_cod' => 'DF',
        ]);

        State::create([
            'name' => 'espirito-santo',
            'name_visible' => 'Espírito Santo',
            'state_cod' => 'ES',
        ]);

        State::create([
            'name' => 'goias',
            'name_visible' => 'Goiás',
            'state_cod' => 'GO',
        ]);

        State::create([
            'name' => 'maranhao',
            'name_visible' => 'Maranhão',
            'state_cod' => 'MA',
        ]);

        State::create([
            'name' => 'minas-gerais',
            'name_visible' => 'Minas Gerais',
            'state_cod' => 'MG',
        ]);

        State::create([
            'name' => 'mato-grosso-do-sul',
            'name_visible' => 'Mato Grosso do Sul',
            'state_cod' => 'MS',
        ]);

        State::create([
            'name' => 'mato-grosso',
            'name_visible' => 'Mato Grosso',
            'state_cod' => 'MT',
        ]);

        State::create([
            'name' => 'para',
            'name_visible' => 'Pará',
            'state_cod' => 'PA',
        ]);

        State::create([
            'name' => 'paraiba',
            'name_visible' => 'Paraiba',
            'state_cod' => 'PB',
        ]);

        State::create([
            'name' => 'pernambuco',
            'name_visible' => 'Pernambuco',
            'state_cod' => 'PE',
        ]);

        State::create([
            'name' => 'piaui',
            'name_visible' => 'Piauí',
            'state_cod' => 'PI',
        ]);

        State::create([
            'name' => 'parana',
            'name_visible' => 'Paraná',
            'state_cod' => 'PR',
        ]);

        State::create([
            'name' => 'rio-de-janeiro',
            'name_visible' => 'Rio de Janeiro',
            'state_cod' => 'RJ',
        ]);

        State::create([
            'name' => 'rio-grande-do-norte',
            'name_visible' => 'Rio Grande do Norte',
            'state_cod' => 'RN',
        ]);

        State::create([
            'name' => 'rondonia',
            'name_visible' => 'Rondônia',
            'state_cod' => 'RO',
        ]);

        State::create([
            'name' => 'roraima',
            'name_visible' => 'Roraima',
            'state_cod' => 'RR',
        ]);

        State::create([
            'name' => 'rio-grande-do-sul',
            'name_visible' => 'Rio Grande do Sul',
            'state_cod' => 'RS',
        ]);

        State::create([
            'name' => 'santa-catarina',
            'name_visible' => 'Santa Catarina',
            'state_cod' => 'SC',
        ]);

        State::create([
            'name' => 'sergipe',
            'name_visible' => 'Sergipe',
            'state_cod' => 'SE',
        ]);

        State::create([
            'name' => 'sao-paulo',
            'name_visible' => 'São Paulo',
            'state_cod' => 'SP',
        ]);

        State::create([
            'name' => 'tocantins',
            'name_visible' => 'Tocantins',
            'state_cod' => 'TO',
        ]);
    }
}
