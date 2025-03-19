<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component
{
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="card space-y-6">
    <div class="card-header">
        <h2 class=" card-title text-lg font-medium text-gray-900">
            {{ __('Supprimer le compte') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Une fois votre compte supprimé, toutes les informations liées à votre compte seront également supprimées. Assurez-vous de les avoir déjà sauvegarder avant de continuer') }}
        </p>
    </div>

    <div class="card-body">
        <button class="btn btn-danger"
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >{{ __('Supprimer le compte') }}</button>

        <x-modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" focusable>
            <form wire:submit="deleteUser" class="p-6">

                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Etes-vous sûr de vouloir supprimer votre compte?') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Une fois votre compte supprimé, toutes les informations liées à votre compte seront également supprimées. Assurez-vous de les avoir déjà sauvegarder avant de continuer') }}
                </p>

                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('Mot de passe') }}" class="sr-only" />

                    <x-text-input
                        wire:model="password"
                        id="password"
                        name="password"
                        type="password"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('Mot de passe') }}"
                    />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Annuler') }}
                    </x-secondary-button>

                    <button class=" btn btn-success">
                        {{ __('Supprimer le compte') }}
                    </button>
                </div>
            </form>
        </x-modal>
    </div>
</div>
