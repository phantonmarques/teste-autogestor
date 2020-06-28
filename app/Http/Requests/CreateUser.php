<?php

    namespace App\Http\Requests;

    class CreateUser extends FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        public function authorize()
        {
            return true;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules()
        {
            $rules = [
                'name' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'unique:customers'],
                'cpf_cnpj' => ['required', 'string', 'min:11', 'unique:customers'],
                'city_id' => ['required'],
                'category_id' => ['required'],
            ];

            return $rules;
        }

        /**
         * Get the error messages for the defined validation rules.
         *
         * @return array
         */
        public function messages()
        {
            return [
                'name.required' => 'O campo [Nome] é obrigatório, favor preencha!',
                'name.string' => 'O campo [Nome] é obrigatório, favor preencha!',
                'name.min' => 'O campo [Nome] deve conter no mínimo 3 caracteres!',
                'email.required' => 'O campo [E-mail] é obrigatório, favor preencha!',
                'email.string' => 'O campo [E-mail] é obrigatório, favor preencha!',
                'email.unique' => 'Já existe esse e-mail cadastrado, favor informe outro!',
                'cpf_cnpj.required' => 'O campo [CPF/CNPJ] é obrigatório, favor preencha!',
                'cpf_cnpj.string' => 'O campo [CPF/CNPJ] é obrigatório, favor preencha!',
                'cpf_cnpj.min' => 'O campo [CPF/CNPJ] deve conter no mínimo 11 números!',
                'cpf_cnpj.unique' => 'Já existe esse cpf/cnpj cadastrado, favor informe outro!',
                'city_id.required' => 'Erro, selecione uma cidade!',
                'category_id.required' => 'Erro, selecione uma categoria!',
            ];
        }
    }
