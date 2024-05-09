@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card p-3 mt-5 border-0 shadow-lg rounded rounded-3">
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="card-title">Verify your email and enter a new password</h3>
                        <!-- Display email dynamically if needed -->
                    </div>
                    <form method="post" action="{{ route('password.reset') }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="token" value="{{ request()->query('token') }}">
                        <div class="mt-3 mb-3">
                            <input type="password" class="form-control py-2 rounded rounded-4" name="password" placeholder="New password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control mb-3 py-2 rounded rounded-4" name="password_confirmation" placeholder="Confirm new Password" required>
                            <small class="form-text text-muted">
                                <ul>
                                    <li>Minimum of 8 characters</li>
                                    <li>Uppercase, lowercase letters, and one number</li>
                                </ul>
                            </small>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-3 rounded rounded-4">Cancel</button>
                            <button type="submit" class="btn btn-primary rounded rounded-4">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection