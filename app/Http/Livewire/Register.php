<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Register extends Component implements HasForms
{
    use InteractsWithForms;

    public $name = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    protected function getFormSchema(): array
    {
        return[
            TextInput::make('name'),
            TextInput::make('email'),
            TextInput::make('password'),
            TextInput::make('passwordConfirmation'),
        ];
    }

    public function render()
    {

  
        return view('livewire.register');
    }
}
