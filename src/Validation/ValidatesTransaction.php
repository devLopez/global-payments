<?php

namespace CSWeb\GlobalPayments\Validation;

use CSWeb\GlobalPayments\Validator;

/**
 * Class ValidatesTransaction
 *
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 1.0.0
 * @package CSWeb\GlobalPayments\Validation
 */
class ValidatesTransaction extends Validator
{
    public function rules(): array
    {
        return [
            'amount'       => ['required', 'numeric'],
            'order'        => ['required', 'alpha_num', 'max:12'],
            'cardHolder'   => ['required', 'max:60'],
            'cardNumber'   => ['required', 'max:19'],
            'cvv'          => ['required', 'min:3', 'max:4'],
            'installments' => ['nullable', 'numeric', 'max:12'],
        ];
    }

    public function attributes(): array
    {
        return [
            'amount'       => 'valor',
            'order'        => 'código',
            'cardHolder'   => 'titular',
            'cardNumber'   => 'número do cartão',
            'installments' => 'parcelas',
        ];
    }
}