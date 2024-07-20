<?php

namespace App\Rules;

use Closure;
use App\Models\Code;
use Illuminate\Contracts\Validation\ValidationRule;

class AccountNumberRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $result = Code::where([
            'code' => $value,
            'is_available' => true
        ])->first();

        if (!$result) {
            $fail('Account number is not valid');
        }
    }
}
