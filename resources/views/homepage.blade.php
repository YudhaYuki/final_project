@extends('wrapper')

@section('content')


<div class="showcase">
        <div class="container">
        <h1 class="text-center">Your Big Day Out</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            <div class="col-md-4">
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
            </div>
            <div class="col-md-4">
            <a href="#review" class="btn btn-primary bdo-btn">Let's Go</a>
            <div>
            </div><!--closes row-->
        </div>
    </div>


@endsection

@section('page_title') Home @endsection