<?php

namespace App\Http\Livewire;

use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Hash;
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
            TextInput::make('name')
                ->required()
                ->maxLength(255),
            TextInput::make('email')
                ->label('Email Address')
                    ->required()
                ->helperText('Please use uyour Company email address')
                ->email()
                ->maxLength(255)
                ->unique(User::class),
            TextInput::make('password')
                ->required()
                ->password()
                ->minLength(8)
                ->same('passwordConfirmation')
                ->dehydrateStateUsing(fn ($state) => Hash::make($state)),
            TextInput::make('passwordConfirmation')
                ->required()
                ->label('confirm Password')
                ->password()
                ->minLength(8)
                ->dehydrated(false),
        ];
    }

    public function register(): void
     {
        $user = User::create($this->form->getState());
        dd($user);

    }

    public function render()
    {

  
        return view('livewire.register');
    }
}
