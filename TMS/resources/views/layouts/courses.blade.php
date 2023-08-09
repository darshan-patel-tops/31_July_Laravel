
@include('layouts.header')

<style>
    .abc{
        margin :30px;
    }

    .active{
        background-color: #69dddd;

    }

    </style>


<section class="about_sec_4">
        <div class="container">

            <center>
                <div class="materials_text">

                    <h2 class="abc">JEE</h2>
                    <h3>JEE-Main | JEE-Advanced</h3>
                </div>
            </center>

        </div>
    </section>

    <section class="about_sec_2">
        <div class="container">
            <div class="row">
                <div class="col_12">
                    <div class="about_sec_2_text">
                        <p>The Joint Entrance Examination (JEE) is an engineering entrance assessment conducted for admission to various engineering colleges in India. It is constituted by two different examinations: the JEE-Main and the JEE-Advanced.</p>

                        <p>The Joint Seat Allocation Authority (JoSAA) conducts the joint admission process for a total of 23 Indian Institutes of Technology, 31 National Institutes of Technology, 25 Indian Institutes of Information Technology campuses and
                            other Government Funded Technical Institutes (GFTIs) based on the rank obtained by a student in JEE-Main or JEE-Advanced, depending on the engineering college.[</p>

                            <p>There are some institutes, such as the Indian Institutes of Science Education and Research (IISERs), the Indian Institute of Petroleum and Energy (IIPE), the Rajiv Gandhi Institute of Petroleum Technology (RGIPT), the Indian Institute of Space Science and Technology (IIST), and the Indian Institute of Science (IISc), which use the score obtained in the
                                JEE-Advanced examination as the basis for admission,[2][3] but are not a part of the Joint Seat Allocation Authority (JoSAA) counselling process..</p>
                                <p>Any student who takes admission to an Indian Institute of Technology cannot appear for the JEE-Advanced examination again, but the same is not the case with NIT, IISc, IISERs, RGIPT, IIPE, and IIST.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section class="about_sec_4">
                <div class="container">
                    <div class="row align-items">
                        <div class="col_50">
                            <div class="number_box">
                                <h6>JEE -Main</h6>
                                <p class="abc">JEE-Main is conducted by National Testing Agency (NTA). JEE-Main has two papers, Paper-I and Paper-II. Candidates may opt for either or both of them. Both papers contain multiple choice questions. Paper-I is for admission to B.E./B.Tech courses and is conducted in a Computer Based Test mode.Paper-II is for admission in B.Arch and B.Planning courses and will also be conducted in Computer Based Test mode except for one paper, namely the 'Drawing Test' which shall be conducted in Pen and Paper mode or offline mode. From January 2020 onwards, an additional Paper-III is being introduced for B.Planning courses separately.</p>
                            </div>
                        </div>

                        <div class="col_50">
                            <div class="number_box">
                                <h6>JEE - Advanced</h6>
                                <p class="abc">JEE-Advanced is conducted for entry into 23 IIT's and some other equally prestigious universities like IISC Bangalore, IIST Thiruvananthapuram, Indian Institute of Petroleum and Energy (IIPE), Indian Institute of Science Education and Research (IISERs), Rajiv Gandhi Institute of Petroleum Technology (RGIPT). This exam is conducted by any one of the IIT's every year. In 2020, the exam was conducted by IIT Delhi. In 2021, 2022, and 2023, it shall be conducted by IIT Kharagpur, IIT Bombay and IIT Guwahati respectively. More than 2 lakh students become eligible to write JEE-Advanced every year. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- -------------- section 3 --------------  -->
            {{-- <section class="current_se_2">
                <div class="container">

                    <center>
                        <div class="col_25">
                            <div class="section_text active">
                                <a style="width: 90%;" > Class</a>
                            </div>
                        </div>
                    </center>


                </div>
            </section>


            <section class="current_se_3">
                <div class="container">
                    <div class="row" id="displayclass">



            </div>
        </div>
    </section> --}}
    {{-- <script>

        fetch("http://localhost/Group_project/API/class").then(response=>response.json()).then((res)=>{
            //console.log(res.Data);
            htmlresponse = '';
            res.Data.forEach(element => {
                if(element.batch_course=="JEE"){
                    htmlresponse += `<div class="col_25"><div class="current_affairs_card"><center>
                        <a>     ${element.batch_course}(${element.batch_class})</a>
                        <p>Batch : ${element.batch_name}</p>
                        <p>Faculty : ${element.batch_faculty}</p>

                        <p>Time : ${element.batch_time}</p>
                        <p>Location : ${element.location}</p>
                        <p>Start Date : ${element.start_date}</p>
                        <a href="register?class=${element.batch_class}&course=${element.batch_course}"><button >Register</button></a><br>
                    </center>
                </div></div>`
            }

        })
        //console.log(htmlresponse);
        $("#displayclass").html(htmlresponse)
    })
</script>

--}}

@include('layouts.footer')
