@extends('frontend.layouts.frontend')

@section('title', 'registracija')

@section('styles')

@endsection

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-6 col-sm-12 col-xs-12 bg-primary d-flex flex-column justify-content-center align-items-center text-white py-5">
            <h2 class="mb-5">Već imate nalog?</h2>
            <p class="mb-5">Ako imate nalog na našem sajtu, kliknite na dugme ispod</p>
            <a href="{{route('login')}}" class="btn btn-success">Uloguj se</a>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center flex-column">

            <div class="w-75 my-5">
                <h2 class="mb-5 text-center">Kreirajte nalog</h2>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" class="form-control mb-4  @error('name') border-danger @enderror" placeholder="Ime i prezime" name="name" value="{{old('name')}}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" class="form-control mb-4  @error('email') border-danger @enderror" placeholder="Email" name="email" value="{{old('email')}}">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" class="form-control mb-4  @error('password') border-danger  @enderror" placeholder="Lozinka" name="password">
                    <input type="text" class="form-control mb-4" placeholder="Potvrda lozinke" name="password_confirmation">
                    @error('agree')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-check form-check-inline mb-4">
                        <input class="form-check-input @error('agree') border-danger  @enderror" type="checkbox" name="agree" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Slažem se sa uslovima korišćenja</label>
                    </div>
                    <button class="btn btn-outline-danger btn-block">Registruj se</button>
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

