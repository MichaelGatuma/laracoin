@if (!\Schema::hasTable((new \App\User)->getTable()))
    <div class="alert alert-danger fade show" role="alert">
        {{ __('Problem Occured in your database, please contact the Administrator! The login information will not be available!') }}
    </div>
@endif