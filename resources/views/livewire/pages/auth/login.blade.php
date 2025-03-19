<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="row" style="margin-top:10%">
    <div class="col-md-4"></div>
    <div class=" modal-dialog-centered col-md-4">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Connectez-vous à votre compte</h5>
        </div>
        <div class="modal-body">
            <form wire:submit="login" class="space-y-6">
                <!-- Email Address -->
                <div>
                    <x-input-label for="login" :value="__('Adresse mail ou Téléphone')" />
                    <x-text-input wire:model="form.login" id="login" class="form-control" type="text" name="login" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('form.login')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Mot de passe</label>
                        <div class="text-sm">
                            @if (Route::has('password.request'))
                                <a class="font-semibold text-indigo-600 hover:text-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <x-text-input wire:model="form.password" id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember" class="inline-flex items-center">
                        <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-4 mb-4">

                    <x-primary-button class="btn btn-primary w-100">
                        {{ __('Connexion') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
      </div>
    </div>
</div>











