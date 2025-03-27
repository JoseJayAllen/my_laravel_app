@extends('notes.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-5 login-card" style="border: none; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Register</h2>
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" 
                                   class="form-control form-control-lg" 
                                   style="background-color: #fafafa; border: 1px solid #dbdbdb; border-radius: 4px; padding: 10px;" 
                                   placeholder="Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" 
                                   class="form-control form-control-lg" 
                                   style="background-color: #fafafa; border: 1px solid #dbdbdb; border-radius: 4px; padding: 10px;" 
                                   placeholder="Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" 
                                   class="form-control form-control-lg" 
                                   style="background-color: #fafafa; border: 1px solid #dbdbdb; border-radius: 4px; padding: 10px;" 
                                   placeholder="Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" 
                                   class="form-control form-control-lg" 
                                   style="background-color: #fafafa; border: 1px solid #dbdbdb; border-radius: 4px; padding: 10px;" 
                                   placeholder="Confirm Password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg w-100" >Register</button>
                    </form>

                    <div class="text-center mt-3">
                        <p>Already have an account?</p>
                        <a href="{{ route('login') }}" class="btn btn-outline-success btn-sm">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection