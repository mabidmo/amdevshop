@extends('layouts/main')

@section('container')
    <div class="container mt-5 mb-3">
        <div class="card bg-dark shadow">
            <div class="card-header mt-4">
                <p class="text-center">Register</p>
            </div>
            <div class="card-body p-5">
                <form action="register" method="POST">
                    @csrf
                    {{-- Name --}}
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="name" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}"/>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}"/>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required/>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="repassword">Re-Password</label>
                        <input type="password" name="repassword" id="repassword" class="form-control @error('repassword') is-invalid @enderror" required/>
                        @error('repassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="g-recaptcha " id="notrobbot" name="notrobbot" data-sitekey="6Lfq1FEgAAAAADVoyUoEK2rKeakXo0vl7ntDZ5xf" aria-required="true"></div>
                    @error('notrobbot')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary d-grid mx-auto btn-block mb-4">Sign UP</button>
                    

                    <!-- Register buttons -->
                    <div class="text-center">

                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
