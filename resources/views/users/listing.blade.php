@extends('wrapper')

@section('content')

<div class="container">

    <h1>List of Users </h1>

    <input type="text" id="search"/>
<button id="btn"> Search users </button>

<br>
<br>

<ul>
@foreach($users as $user)
    <li>
        <a href="{{ route('user detail', ['id' => $user->id]) }}">
            {{ $user->name }} {{ $user->surname }} ({{ $user->email }})
        </a>
    </li>
@endforeach
</ul>

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

@section('page_title') List of users @endsection