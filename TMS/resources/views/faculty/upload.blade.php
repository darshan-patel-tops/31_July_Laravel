@extends('layouts.faculty')

@section('content')

<div class="col_50">
    <form class="forme_color" action="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="course" placeholder="course">
        <input type="text" name="topic"placeholder="topic">
        <input type="file" name="pdf"placeholder="pdf">

       
        <button type="submit">Submit</button>
    </form>
</div>

@endsection