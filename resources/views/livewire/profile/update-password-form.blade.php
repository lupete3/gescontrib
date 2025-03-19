<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component
{
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        $this->dispatch('password-updated');
    }
}; ?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title text-lg font-medium text-gray-900">
            {{ __('Mettre à jour le mot de passe') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Assurez-vous que votre mot de passe est long et complexe pour une meilleure sécurité.') }}
        </p>
    </div>

    <div class="card-body">
        <form wire:submit="updatePassword" class="mt-6 space-y-6">
            <div>
                <x-input-label for="update_password_current_password" :value="__('Mot de passe actuel')" />
                <x-text-input wire:model="current_password" id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="update_password_password" :value="__('Nouveau Mot de passe')" />
                <x-text-input wire:model="password" id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="update_password_password_confirmation" :value="__('Confirmer le Mot de passe')" />
                <x-text-input wire:model="password_confirmation" id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center gap-4 mt-4">
                <button class="btn btn-success">{{ __('Sauvergarder') }}</button>

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Sauvergarder.') }}
                </x-action-message>
            </div>
        </form>
    </div>
</div>
