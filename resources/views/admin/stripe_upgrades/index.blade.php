@extends('layouts.app')

@section('content')
    <h3 class="page-title">Upgrade to premium</h3>

    <div class="row">
        <div class="col-md-12">
        @if(empty(env('PUB_STRIPE_API_KEY')) || empty(env('STRIPE_API_KEY')))
            <div class="alert alert-danger">
                <p>
                    Please specify <strong>PUB_STRIPE_API_KEY</strong> and <strong>STRIPE_API_KEY</strong> in your <strong>.env</strong> file!
                </p>
            </div>
        @else
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @else
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <form action="{{ route('admin.stripe_upgrades.store') }}" method="POST">
                    <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="{{ env('PUB_STRIPE_API_KEY') }}"
                        data-amount="1999"
                        data-currency="usd"
                        data-name="hrgamification"
                        data-label="Pay 19.99 USD to Upgrade"
                        data-description="Upgrade to premium"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto"
                        data-zip-code="false">
                    </script>
                    {{ csrf_field() }}
                </form>
            @endif
        @endif
        </div>
    </div>
@endsection
