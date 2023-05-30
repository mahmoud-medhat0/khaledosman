<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidCodeStudent implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        if (DB::table('codes')->where('status','0')->where('student_id',auth()->user()->id)->get() == '[]') {
            $fail('برجاء ادخال كود صالح.');
        }
    }
}
