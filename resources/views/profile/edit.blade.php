<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('profile.partials.delete-user-form')

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">

                    @include('profile.partials.update-profile-information-form')
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
