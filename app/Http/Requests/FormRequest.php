<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest as LaravelFormRequest;
    use \Illuminate\Contracts\Validation\Validator;
    use Waavi\Sanitizer\Laravel\SanitizesInput;

    abstract class FormRequest extends LaravelFormRequest
    {
        use SanitizesInput;

        /**
         * For more sanitizer rule check https://github.com/Waavi/Sanitizer
         */
        public function validateResolved()
        {
            {
                $this->sanitize();
                parent::validateResolved();
            }
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        abstract public function rules();

        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        abstract public function authorize();

        /**
         * Handle a failed validation attempt.
         *
         * @param  Validator  $validator
         * @return mixed
         */
        protected function failedValidation(Validator $validator)
        {
            request()->session()->flash('form_validation.error', true);
            return parent::failedValidation($validator);
        }
    }
