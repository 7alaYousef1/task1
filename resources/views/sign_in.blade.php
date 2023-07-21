
@extends('layout')

@section('content')
    <section class="sec1">
        <div class="container">
            <div class="sign-home">
                <div class="sign-in">
                    <div class="title ">
                        <h3>SIGN IN</h3>
                        <p>Rigestered Customers</p>
                    </div>
                    <form class="form" method="POST" action="{{ route('sign_in_data') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box1 mb-3">
                            <label>NAME:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"/>
                            @error('name')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        </div>
                        <div class="box1 mb-3">
                            <label>EMAIL:</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                            @error('email')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        </div>
                        <div class="box1 mb-3">
                            <label>PASSWORD:</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"/>
                            @error('password')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        </div>

                        <div class=" box1 mb-3">
                            <label>Image:</label>
                            <input type="file" name="image" class="form-control  @error('password') is-invalid @enderror" value="{{ old('image') }}" />
                            @error('image')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        </div>

                            <button class="btn btn-success">Upload</button>
                    </form>
                    <a href="#" class="end">FORGET YOUR PASSWORD?</a>
                </div>

            </div>
        </div>
    </section>
@endsection
