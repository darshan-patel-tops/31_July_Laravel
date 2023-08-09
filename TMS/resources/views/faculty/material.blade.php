@extends('layouts.faculty')

@section('content')

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-7 offset-3 mt-4">
            <div class="card-body">
                <form method="post" action="/generatepdf" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="course">
                                    <input type="text" name="topic">
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="wysiwygeditor"></textarea>
                    </div>
        <input type="submit" placeholder="save">
    </form>
</div>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>




@endsection