@include('layouts.header')
<section class="m_sec_1">
    <div class="container">
        <div class="row align-items">
            <div class="col_50">
                <div class="materials_img">
                    <img src="assets/img/img/Group-47609.png" alt="">
                </div>
            </div>
            <div class="col_50">
                <div class="materials_text">
                    <h2>Free Materials</h2>
                    <h3> Find by keyword and topic for getting the accurate results. </h3>
                    <form action="" class="mit_form">
                        <input type="search" class="search_field " placeholder="Search" value="" name="">
                        <button class="search_submit">Search</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</section>


{{-- @foreach ($materials as $material)
<h1>{{$material->course}}</h1>
<h1>{{$material->topic}}</h1>

<img src="/storage/{{$material->pdf}}" height="500px" width="500px">

@endforeach --}}

<section class="m_sec_2">
    <div class="container">
        <div class="row">
            <div class="col_12">
                <div class="all_mat">
                    <p><a href="">All materials</a></p>
                </div>
            </div>
        </div>
        <div class="row  justify">
            @foreach ($materials as $material)


{{-- <img src="/storage/{{$material->pdf}}" height="500px" width="500px"> --}}


            <div class="col_30">
                <div class="pdf_box">
                    <div class="row align-items">
                        <div class="col_80">
                            <div class="pdf_text">
                                <h3><span>{{$material->course}}</span></h3>
                                <h6><span>{{$material->topic}}</span></h6>
                            </div>
                        </div>
                        <div class="col_20">
                            <div class="pdf_icons">
                                <p><i class="fa-solid fa-download"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            @endforeach 
            </div>    
    </div>
</section>
@include('layouts.footer')
    