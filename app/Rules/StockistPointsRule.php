<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class StockistPointsRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = auth()->user();

        if ($user->stockist_points <= 0) {
            $fail('You do not have enough points.');
        }

        if ($user->stockist_points - $value < 0) {
            $fail('You do not have enough points.');
        }
    }
}
