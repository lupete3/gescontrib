<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $role = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'unique:'.User::class],
            'role' => ['required', 'string', 'in:admin,recouvreur,caissier,membre'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>



<div class="row" style="margin-top:1%">
    <div class="col-md-3"></div>
    <div class=" modal-dialog-centered col-md-6">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Créer votre compte votre compte</h5>
        </div>
        <div class="modal-body">
            <form wire:submit="register" class="space-y-6 row">
                <!-- Email Address -->
                <!-- Name -->
                <div class="mt-4 col-md-6" >
                    <x-input-label for="name" :value="__('Nom complet')" />
                    <x-text-input wire:model="name" id="name" class="form-control" type="text" name="name" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                </div>

                <!-- Email Address -->
                <div class="mt-4 col-md-6">
                    <x-input-label for="email" :value="__('Adresse mail')" />
                    <x-text-input wire:model="email" id="email" class="form-control" type="email" name="email" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                </div>

                <!-- Phone -->
                <div class="mt-4 col-md-6">
                    <x-input-label for="phone" :value="__('Téléphone')" />
                    <x-text-input wire:model="phone" id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2 text-danger" />
                </div>

                <!-- Role -->
                <div class="mt-4 col-md-6">
                    <x-input-label for="role" :value="__('Role')" />
                    <select wire:model="role" id="role" name="role" class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                        <option value="" selected disabled>Choisir le rôle</option>
                        <option value="admin">Admin</option>
                        <option value="recouvreur">Recouvreur</option>
                        <option value="caissier">Caissier</option>
                        <option value="membre">Membre</option>
                    </select>
                    <x-input-error :messages="$errors->get('role')" class="mt-2 text-danger" />
                </div>

                <!-- Password -->
                <div class="mt-4 col-md-6">
                    <x-input-label for="password" :value="__('Mot de passe')" />

                    <x-text-input wire:model="password" id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 col-md-6">
                    <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

                    <x-text-input wire:model="password_confirmation" id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                </div>
                <div class="flex items-center justify-end mt-4 mb-4">

                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Créer le compte') }}
                    </button>
                </div>

            </form>
        </div>
      </div>
    </div>
</div>
