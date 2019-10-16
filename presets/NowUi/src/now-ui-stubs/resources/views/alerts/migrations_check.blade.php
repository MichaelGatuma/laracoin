@if (!\Schema::hasTable((new \App\User)->getTable()))
    <div class="alert alert-danger fade show" role="alert">
        {{ __('You database is Empty! The login information will not be available!') }}
    </div>
@endif