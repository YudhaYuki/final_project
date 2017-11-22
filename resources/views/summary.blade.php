@extends('wrapper')

@section('content')


<div class="container mb-5">
    <div class="row mb-5">
        <div class="col-md-8 mt-5 bdo-summary mb-5">
            <div class="card">
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item bdo-sum-heading">Order Summary</li>
                    <li class="list-group-item"><strong>Activity Max Budget:</strong><br>€50</li>
                    <li class="list-group-item"><strong>Group Size:</strong><br>3 people</li>
                    <li class="list-group-item"><strong>Date of Activity:</strong><br>12 Dec 2017</li>
                    <li class="list-group-item"><strong>Activities excluded</strong><br>Poker<br>Squash</li>
                    <li class="list-group-item"><strong>Group Leader:</strong><br>John Dwyer</li>
                    <li class="list-group-item"><strong>Contact Number</strong><br>+353861696266</li>
                    <li class="list-group-item"><strong>Email:</strong><br>joe123@gmail.com</li>
                </ul>
                <div class="goToRegister text-center mt-5 mb-5">
                  <a href="{{ route('register') }}" class="btn btn-primary bdo-btn-reg">Go To Payment</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection