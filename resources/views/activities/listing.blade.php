@extends('wrapper')

@section('content')

<div class="container">

    <h1>List of activities</h1>

    <input type="text" id="search"/>
<button id="btn"> Search activity </button>

<br>
<br>

<div class="row">
    @foreach($activities as $activity)
        
        <div class="col-lg-4 col-sm-3">

            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ asset('uploads/' .$activity->picture) }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><a href="{{ route('activity detail', ['id' => $activity->id]) }}">{{ $activity->name }} </a></h4>
                    <!-- <p class="card-text"><a href="{{ route('activity detail', ['id' => $activity->id]) }}">{{ $activity->description }} </a></p> -->
                    <a href="{{ route('activity detail', ['id' => $activity->id]) }}" class="btn btn-primary">More details</a>
                </div>
            </div>

        </div>
        <br>
       
    <!-- 
    <li>
        <a href="{{ route('activity detail', ['id' => $activity->id]) }}">
            {{ $activity->name }} <img src="{{ asset('uploads/' .$activity->picture) }}"> ({{ $activity->price }})
        </a>
    </li> 
    -->
    @endforeach

    </div>

    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>


<script>

$('#btn').click(function() {

            var s = $('#search').val();
            
            $.ajax({
                'url': '/activities/search',
                'type': 'post',
                'data' : {
                    'search' : s
                }
            }).done(function(data){

                console.log(data.length);

                $('ul').empty();

                for(var i = 0; i < data.length; i++) {
                    $('ul').append(
                        '<li>'+ 
                            '<a href="">' + data[i].name + '(' +data[i].picture+ ')</a>'+ 
                         '</li>'
                    );
                }
            });

            // console.log(s);
        });

</script>
@endsection

</div>

@section('page_title') List of activities @endsection