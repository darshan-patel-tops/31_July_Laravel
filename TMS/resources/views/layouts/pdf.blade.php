{{-- @include('layouts.header') --}}


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    </head>
    <body>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Install and Use CKEditor In Laravel</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            </head>
            <body>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 offset-3 mt-4">
                            <div class="card-body">
                                <form method="post" action="/generatepdf" enctype="multipart/form-data">
                                 
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="ckeditor form-control" name="wysiwygeditor"></textarea>
                                    </div>
                        <input type="submit" placeholder="save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
</html>


</body>
</html>

{{-- @include('layouts.footer') --}}