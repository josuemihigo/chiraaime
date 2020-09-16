@extends('layouts.app')

@section('content')
        <div class="middle-box text-center loginscreen animated fadeInDown">
                <div>

                    <h1 class="logo-name">IN+</h1>

                </div>
                <h3>Welcome to IN+</h3>
                <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                    Continually expanded and constantly improved Inspinia Admin Them (IN+)
                    {{ __('Verify Your Email Address') }}
                </p>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
