@extends('notes.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-5 login-card" style="border: none; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Log in</h2>
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" id="email" value="{{ old('email') }}" 
                                   class="form-control form-control-lg" 
                                   style="background-color: #fafafa; border: 1px solid #dbdbdb; border-radius: 4px; padding: 10px;" 
                                   placeholder="Email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <input type="password" name="password" id="password" 
                                   class="form-control form-control-lg" 
                                   style="background-color: #fafafa; border: 1px solid #dbdbdb; border-radius: 4px; padding: 10px;" 
                                   placeholder="Password" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg w-100" >Login</button>
                    </form>

                    <div class="text-center mt-3">
                        <p>Don't have an account yet?</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-success btn-sm">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection