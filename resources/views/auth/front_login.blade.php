@extends('frontend.layouts.frontend')

@section('title', 'login')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 col-sm-12 col-xs-12 bg-success d-flex flex-column justify-content-center align-items-center text-white py-5">
                <h2 class="mb-5">Nemate nalog?</h2>
                <p class="mb-5">Ako nemate nalog na našem sajtu, kliknite na dugme ispod da biste se registrovali</p>
                <a href="{{route('register')}}" class="btn btn-primary">Registruj se</a>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center flex-column">

                <div class="w-75 my-5">
                    <h2 class="mb-5 text-center">Uloguj se</h2>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control mb-4  @error('email') border-danger @enderror" placeholder="Email" name="email" value="{{old('email')}}">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control mb-4  @error('password') border-danger  @enderror" placeholder="Lozinka" name="password">
                        <button class="btn btn-outline-warning btn-block">Uloguj se</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
