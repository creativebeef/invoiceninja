@extends('portal.ninja2020.layout.app')
@section('meta_title', ctrans('texts.payment_type_credit_card'))

@push('head')
    <meta name="authorize-public-key" content="{{ $public_client_id }}">
    <meta name="authorize-login-id" content="{{ $api_login_id }}">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{ asset('js/clients/payments/card-js.min.js') }}"></script>
    <link href="{{ asset('css/card-js.min.css') }}" rel="stylesheet" type="text/css">

@endpush

@section('body')
    <form action="{{ route('client.payments.response') }}" method="post" id="server_response">
        @csrf
        @foreach($invoices as $invoice)
            <input type="hidden" name="hashed_ids[]" value="{{ $invoice->hashed_id }}">
        @endforeach
        <input type="hidden" name="company_gateway_id" value="{{ $gateway->id }}">
        <input type="hidden" name="payment_method_id" value="1">
        <input type="hidden" name="gateway_response" id="gateway_response">
        <input type="hidden" name="dataValue" id="dataValue" />
        <input type="hidden" name="dataDescriptor" id="dataDescriptor" />
        <input type="hidden" name="token" id="token" />
        <input type="hidden" name="store_card" id="store_card" />
        <input type="hidden" name="amount_with_fee" id="amount_with_fee" value="{{ $amount_with_fee }}" />
    </form>
    <div class="container mx-auto">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-6 md:col-start-2 md:col-span-4">
                <div class="alert alert-failure mb-4" hidden id="errors"></div>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                    </div>
                    <div>
                        @if($tokens->count() == 0)
                        <dl>
                            @include('portal.ninja2020.gateways.authorize.credit_card')

                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    {{ ctrans('texts.token_billing_checkbox') }}
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <input type="checkbox" class="form-checkbox" name="store_card_checkbox"
                                           id="store_card_checkbox"/>
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 flex justify-end">
                                <button class="button button-primary" id="card_button">{{ ctrans('texts.pay_now') }}</button>
                            </div>
                        </dl>
                        @else
                            <!-- TODO Iterate through the tokens and display the card type and last4 and present 
                                a button for payment -->
                            <ul>
                            @foreach($tokens as $token)
                                <li>
                                    {{ $token->meta->brand }} : {{ $token->meta->last4 }} : <button class="button button-primary pay_now_button" data-id="{{ $token->hashed_id }}">{{ ctrans('texts.pay_now') }}</button>
                                </li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer')

    @if($gateway->getConfigField('testMode'))
        <script src="https://jstest.authorize.net/v1/Accept.js" charset="utf-8"></script>
    @else
        <script src="https://js.authorize.net/v1/Accept.js" charset="utf-8"></script>
    @endif

    <script src="{{ asset('js/clients/payments/authorize-credit-card-payment.js') }}"></script>
    
@endpush