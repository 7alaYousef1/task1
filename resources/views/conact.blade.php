@extends('layout')

@section('content')
    <section class="section1">
        <div class="pic">Let's Talk</div>
    </section>
    <section class="section2">
        <div class="container5">
            <div class="get">
                <p class="p1">GET IN TOUCH</p>
                <p class="p2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae
                    enim sollicitudin, suscipit enim nec, scelerisque erat.
                </p>
            </div>
            <div class="al">
                <div class="di1">
                    <form action="{{ ROUTE('conact_data') }}" class="form" method="POST">
                        @csrf
                        <div class="line1">
                            <div>
                            <input type="text" name="fname" placeholder="First Name"
                                class="form-control @error('fname') is-invalid @enderror" value="{{ old('fname') }}">
                            @error('fname')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                            <div>
                                <input type="text" name="lname" placeholder="Last Name"
                                    class="form-control @error('lname') is-invalid @enderror" value="{{ old('lname') }}">
                                @error('lname')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror

                            </div>
                            <div>
                                <input type="text" name="phone" placeholder=" Phone Number"
                                    class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                @error('phone')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>
                        <div class="line2">
                            <div>
                                <input type="text" name="subject" placeholder="Subject"
                                    class="form-control @error('subject') is-invalid @enderror"
                                    value="{{ old('subject') }}">
                                @error('subject')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror

                            </div>
                            <div>
                                <input type="text" name="company" placeholder="Company (if exists)"
                                    class="form-control @error('company') is-invalid @enderror"
                                    value="{{ old('company') }}">
                                @error('company')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror

                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email Address"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <textarea cols="95.5" rows="20" name="description" placeholder="Description"
                                class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"></textarea>
                            @error('description')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                        </div>
                        <br>
                        <button class="btn btn-success">Upload</button>
                    </form>
                </div>
                <div class="di2">
                    <div class="img">
                        <img src="images/contact1.jpeg" alt="">
                    </div>
                    <div class="top">
                        <p class="p1">OJR OFFICE</p>
                        <p class="p2">1235 Main Street, Suite 500</p>
                        <p class="p3">Francisco, CA 12345</p>
                    </div>
                    <div class="bottom">
                        <p class="p1">GENERAL INUERIES</p>
                        <p class="p2">info@glyokuwait.com</p>
                        <p class="p3">916-987-6543</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 2 -->
@endsection
