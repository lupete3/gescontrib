<x-app-layout>

    <div class="container">
        <div class="page-inner">
          <div
            class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
          >
            <div>
              <h3 class="fw-bold mb-3">Profile</h3>
              <h6 class="op-7 mb-2">Mettre à jour votre profile</h6>
            </div>
          </div>
          <div class="row">
            <div class=" col-md-6">
                <div class="">
                    <livewire:profile.update-profile-information-form />
                </div>
                <div class=" mt-4">
                    <livewire:profile.delete-user-form />
                </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            </div>
        </div>
    </div>

</x-app-layout>

