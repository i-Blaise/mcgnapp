<?php

namespace App\Actions\Fortify;

use App\Models\RegistrationRefCode;
use App\Models\User;
use Doctrine\DBAL\Types\BooleanType;
use Flasher\Laravel\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use PhpParser\Node\Expr\Cast\Bool_;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input)
    {
        // dd($input);
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'reference' => ['required', 'max:255', 'exists:registeration_ref_code,ref_code'],
            'password' => $this->passwordRules(),
        ])->validate();

        // if(!$this->verifyRefCode($input['ref_code'])){
        //     return back()->with('error', 'Reference Code Incorrect');
        // }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }


    // public function verifyRefCode($ref_code): bool{
    //     $db_ref_code = RegistrationRefCode::where('ref_code', '==', $ref_code)->count();
    //     return $db_ref_code == 1 ? true : false;
    // }
}
