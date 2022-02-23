@extends('banxe.admin.master')

@section('container')
{{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                     <a class="" href="{{route('banxe.prolist')}}">    
                                Về trang admin
                            </a>
                </div>
            </div>
        </div>
    </div> --}}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col"><h1> Tổng Doanh Thu Theo Năm </h1></div>
        </div>
        <hr>
        <div class="row">
            <img src="/image/download3.png" alt="img dashboad" width="100%" style="margin-top:30px">
            <hr>
        </div>
    </div>
</div>   
{{-- </div> --}}
@endsection
