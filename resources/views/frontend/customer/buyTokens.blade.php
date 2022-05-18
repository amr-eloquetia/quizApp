@extends('Frontend.layouts.master')
@section('content')

<div class="wrapper">
    <div class="container mb-5">
        <div class="row">
            <form class="form" id="wizard" method="POST" action="{{ route('buyTokens.post') }}">
                @csrf
                <div class="col-md-12">
                    <div class="card m-3" style="border-radius: 12px">
                        <div class="card-body text-light token-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3 class="text-center">Buy Tokens</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="answer_area">
                                        <div class="row">
                                            <div class="col-md-6 d-flex justify-content-center">
                                                <div class="form-group">
                                                    <input type="radio" name="tokens" value="1000">
                                                    <label for="answer">Buy 1000 Tokens</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-center">
                                                <div class="form-group">
                                                    <input type="radio" name="tokens" value="2000">
                                                    <label for="answer">Buy 2000 Tokens</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 d-flex justify-content-center">
                                                <div class="form-group">
                                                    <input type="radio" name="tokens" value="5000">
                                                    <label for="answer">Buy 5000 Tokens</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-center">
                                                <div class="form-group">
                                                    <input type="radio" name="tokens" value="10000">
                                                    <label for="answer">Buy 10000 Tokens</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if(session()->has('success'))
                    <div class="alert alert-success form-group">{{ session()->get('success')['message'] }}</div>
                    @endif
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="answer_option">
                            <button class="btn btn-success" type="submit">Buy Now</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
