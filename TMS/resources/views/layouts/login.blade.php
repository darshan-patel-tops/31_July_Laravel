@include('layouts.header')


@if($message = Session::get('success'))

<div class="alert alert-info">
    {{$message}}
</div>
@endif
<section class="contact_sec2 mt-10">
    <div class="container mt-10">
        <div class="row mt-10">
            <div class="col_50 mt-10">
                <div class="contact_box mt-10">
                    <div class="contact_box_text mt-10">

                        <h3>login</h3>


                        <form action="" method="post">
                            @csrf

                            <label for="email"> email</label>
                            <input type="email" id="email" name="email"placeholder="email">
                            <label for="password">password</label>
                            <input type="password" id="password" name="password" placeholder="password">
                            
<div class="col-6">
    <button type="submit" class="submit"> Login</button>

</div>
</div>
</div>
</div>
</div>
</div>
</form>

</section>
@include('layouts.footer')