<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class IsEmployee implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $user = User::where('email', $value)->first();
        return $user->user_type === 'employee';
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You are Not Employee.';
    }
}
