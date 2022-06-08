@extends('auth.layouts.master')

@section('content')
    <br>
    <!--start wrapper-->
    <div class="wrapper">

<!--start wrapper-->
<div class="wrapper">

        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="card pt-4" style="padding-left: 5%; padding-right:5%">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                                <img src="{{ asset('template/assets/images/error/auth-img-7.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Sign Up</h5>
                                    <p class="card-text mb-5">Start Reading for free today</p>
                                    <hr>
                                    <form class="form-body" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Name</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        </i></div>
                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                                        value="{{ old('name') }}" required autocomplete="name"
                                                        placeholder="Enter your full name" autofocus>

                                                        @if ($errors->has('name'))
                                                        <span id="ordertype-error" class="error text-danger" for="input-ordertype">
                                                        {{ $errors->first('name') }}</span>
                                                         @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Ic Number</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        </i></div>
                                                    <input id="ic" type="text"
                                                        class="form-control @error('ic') is-invalid @enderror" name="ic"
                                                        maxlength="12" value="{{ old('ic') }}"
                                                        placeholder="Enter your IC. Example : 990131045045 (without -)"
                                                        required autocomplete="ic">
                                                        @if ($errors->has('ic'))
                                                        <span id="ordertype-error" class="error text-danger" for="input-ordertype">
                                                        {{ $errors->first('ic') }}</span>
                                                         @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Email</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        </i></div>
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}"
                                                        placeholder="Enter your email address" required
                                                        autocomplete="email">
                                                        @if ($errors->has('email'))
                                                        <span id="ordertype-error" class="error text-danger" for="input-ordertype">
                                                        {{ $errors->first('email') }}</span>
                                                         @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Phone Number</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        </i></div>
                                                    <input id="phone" type="text"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        name="phone" maxlength="11" value="{{ old('phone') }}"
                                                        placeholder="Enter your phone number" required autocomplete="phone">
                                                        @if ($errors->has('phone'))
                                                        <span id="ordertype-error" class="error text-danger" for="input-ordertype">
                                                        {{ $errors->first('phone') }}</span>
                                                         @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Address</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        </i></div>
                                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="4" required
                                                        autocomplete="address"
                                                        placeholder="Enter your address">{{ old('address') }}</textarea>
                                                        @if ($errors->has('address'))
                                                        <span id="ordertype-error" class="error text-danger" for="input-ordertype">
                                                        {{ $errors->first('adddress') }}</span>
                                                         @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        </i></div>
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Confirm
                                                    Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        </i></div>
                                                    <input id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">I Agree to
                                                        the Trems & Conditions</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary radius-30">Sign in</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="mb-0">Already have an account?
                                                    <a  href="{{ route('login') }}">Sign in </a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!--end page main-->

    </div>
    <!--end wrapper-->
@endsection
