<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUF INFO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    p.card_info {
        font-size: 18px;
        font-weight: bold;
    }

    p.card_info span {
        font-weight: normal;
    }

    a.btn.dy_btn {
        position: absolute;
        right: 10px;
        top: 10px;
    }

    td {
        text-transform: capitalize;
    }

    @media only screen and (min-width: 768px) {
        .mobil_redesing {
            display: none;
        }

    }

    @media only screen and (max-width: 767px) {
        .display_deisgn {
            display: none;
        }

        .mobil_redesing {
            display: block;
        }
    }

    .top_info_short p {
        padding: 0;
        margin: 0;
        margin-bottom: 0px;
        margin-bottom: 10px;
        font-size: 17px;
    }

    .top_info_short .table tbody tr th,
    .top_info_short .table tbody tr td {
        padding: 10px 10px;
    }

    .top_info_short .table tbody tr th {
        width: 180px;
    }

    * {
        font-family: 'Montserrat', sans-serif;
        font-family: 'Tiro Bangla', serif;
    }

    .site_logos {
        text-align: center !important;
        margin: 0 auto !important;
        justify-content: center;
        align-content: center;
        align-items: center;
    }

    .site_logos .site_logo_Inner {
        display: inline-block !important;
        align-items: center;
        width: auto;
        text-align: left !important;
    }

    .site_logos .site_logo_Inner {
        display: inline-block !important;
        align-items: center;
        width: auto;
        text-align: left !important;
    }

    .site_logos .site_logo_Inner img {
        width: 100px;
    }

    .site_logos .site_logo_Inner h3,
    .site_logos .site_logo_Inner h4 {
        margin: 0;
    }

    .site_logo_Inner img {
        width: 100px;
    }
    </style>

</head>

<body class="profile_main">



    @foreach($gufData as $row)
    <!-- <img src="{{asset('images/' .$row->img)}}" width='170px' height='170px' alt='image' />
    <img src="" alt=""> -->



    <div class="container log_pg mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">

                <div class="main_Protfolio_design border p-2">

                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 text-right"><a href="{{route('pdfDownload')}}"
                                    class="btn btn-primary dy_btsn">Download
                                    PDF</a></div>
                            <div class="col-md-12  pt-5 pb-1 px-5">
                                {{-- <div class="top_logo text-center">
                                    <img src="{{asset('logo/'.'CGHS.png')}}" alt="" width="80">
                            </div>
                            <div class="site_logo_Inner ">
                                <img src="{{asset('logo/'.'guf_logo.jpg')}}" alt="" width="">
                            </div>
                            <h2 class="text-center mt-2 mb-3">Invitation letter</h2> --}}
                            <div class="top_header">
                                <img src="{{asset('logo/'.'guf_logo.jpg')}}" alt="" width="120">

                                <div class="top_tx_head">
                                    <h3 class="top_title">গিয়াস উদ্দিন ফাউন্ডেশন</h3>
                                    ঠিকানাঃ চকরিয়া ৪৭৪১, কক্সবাজার.
                                    <br>
                                    <!-- <h3 class="hed_last">CGHS Alumni Association</h3> -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <h3 class="text-center pb-4">আবেদনকারীর তথ্য</h3>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 text-left top_info_short">
                            <table class="table table-bordered tableborderless">
                                <tbody>
                                    <tr>
                                        <th>আবেদনের তারিখ</th>
                                        <td>{{$row->date}}</td>
                                    </tr>


                                    <tr>
                                        <th>আইডি</th>
                                        <td>{{$row->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>ভুক্তভোগির নাম </th>
                                        <td>{{$row->victim_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>ভুক্তভোগির জাতীয় পরিচয় পত্র </th>
                                        <td>{{$row->victim_national_id}}</td>
                                    </tr>

                                    <tr>
                                        <th>ভুক্তভোগির মোবাইল নাম্বার</th>
                                        <td>{{$row->victim_mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th>ভুক্তভোগির বিভাগ</th>
                                        <td>{{$row->victim_division}}</td>
                                    </tr>
                                    <tr>
                                        <th>ভুক্তভোগির জেলা</th>
                                        <td>{{$row->victim_district}}</td>
                                    </tr>
                                    <tr>
                                        <th>ভুক্তভোগির থানা</th>
                                        <td>{{$row->victim_thana}}</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                        <div class="col-lg-4 col-md-12 text-right">
                            <div class="reg_ings_sect">
                                <div class="bar_cds">
                                    {!!DNS1D::getBarcodeHTML("$row->id", 'C128')!!}
                                    <p>Regestration Barcode</p>
                                </div><br>
                                <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('images/'.$row->img)))}}"" width='100%' height='200px' alt='image'
                                      class=" border rounded" />

                                <p>ভুক্তভোগির ছবি</p>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>অসুবিধার বিবরণ</th>
                                        <td>{{$row->message}}</td>
                                    </tr>
                                    <tr>
                                        <th>প্রয়োজনীয় অর্থ</th>
                                        <td>{{$row->required_money}}</td>
                                    </tr>
                                    <tr>
                                        <th>প্রয়োজনের সময়</th>
                                        <td>{{$row->time}}</td>
                                    </tr>
                                    <tr>
                                        <th>আবেদনকারী নাম</th>
                                        <td>{{$row->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>আবেদনকারীর জাতীয় পরিচয় পত্র</th>
                                        <td>{{$row->national_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>আবেদনকারীর মোবাইল নাম্বার</th>
                                        <td>{{$row->mobile}}</td>
                                    </tr>






                                </tbody>
                            </table>
                            <!-- <div class="reg_footer">
                            <P>**Batch Representation will handover Invitation letter to you**<br>
                                **When You Came Pleace carrey your Invitation card** </P>
                        </div> -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>









    <style>
    .top_title {
        color: #1c3795;
    }

    .reg_ings_sect {
        text-align: center;
    }

    .hed_last {
        margin-top: 10px;
        font-weight: bold;
        color: #7f0000;
    }

    .top_header .top_tx_head h5 {
        font-size: 28px;
        font-weight: bold;
    }

    .top_header .top_tx_head {
        position: absolute;
        display: inline-block;
        width: 80%;
        top: 35px;
        font-size: 14px;
        text-align: center;
        left: 50%;
        transform: translate(-50%, 0);
    }

    .pdf_main_wrap {
        margin: 0 auto;
        width: 600px;
        /* border: 1px solid #ddd;
            padding: 40px 30px; */
        position: relative;
    }

    .top_header {
        display: block;
        clear: both;
        width: 100%;
        position: relative;
        height: 170px;

    }

    .top_header h3 {
        font-weight: bold;

    }

    .pdf_Reg_info h3 {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0);
        height: 200px;
        color: #1c3795;

    }

    .top_header img {
        display: inline-block;
        position: absolute;
        top: 0px
    }

    .top_header .top_tx_head h3 {
        font-size: 21px;
    }

    .reg_tbl_info {
        width: 400px;
        position: absolute;
        left: 0;
        padding-right: 20px;
        top: 50px;
    }

    .reg_ings_section {
        width: 190px;
        position: absolute;
        right: 0;
        text-align: center;
        top: 50px;
    }

    .reg_footer p {
        margin: 0;
        padding: 0;
    }

    .pdf_Reg_info {
        position: relative;
        height: 360px;
    }

    .reg_tbl_info {}

    .reg_table {
        width: 100%;
        border: 1px solid #dee2e6;
    }

    .reg_table tr th {
        font-weight: bold;
    }

    .reg_table tr th,
    .reg_table tr td {
        border: 1px solid #dee2e6;
        padding: 5px 10px;
        text-align: left;
        font-size: 14px;
    }

    .reg_table tr th {}

    .reg_ings_section img.border.rounded.ml {
        width: 200px;
        height: 190px;
        object-fit: cover;
    }

    .table_btm tr th,
    .table_btm tr td {
        border: 1px solid #dee2e6;
        padding: 4px 20px;
        text-align: left;
        font-size: 14px;
    }

    .table_btm {
        width: 100%;
        border: 1px solid #dee2e6;
    }

    .table_btm tr th {
        font-weight: bold;
    }

    .reg_footer {
        display: block;
        text-align: center;
        border: 1px solid #ddd;
        margin: 10px 0;
        padding: 5px 10px;
        color: #ea1f26;
    }

    .footer_contact {
        display: block;
        position: relative;
        height: 30px;
    }

    .contact_number {
        position: absolute;
        left: 0;
    }

    .email_info {
        position: absolute;
        right: 0;
    }

    .bar_cd {
        text-align: center !important;
        margin: 0 auto;
        position: absolute;
        right: 18px;
    }

    .reg_ings_section img {
        width: 130px;
        object-fit: cover;
        height: 200px;
        margin-top: 70px;
    }

    .reg_ings_sect img {
        width: 100%;
        height: 330px;
        object-fit: cover;
    }

    .imgbtn001 {
        width: 100%;
    }

    .imgtop001 {
        position: absolute;
        width: 90px;
        right: 0px;
        top: 7px;
    }

    .imgmid001 {
        position: absolute;
        width: 470px;
        left: 50%;
        transform: translate(-50%, -50%);
        top: 50%;
        z-index: -1;
        opacity: 0.6;
    }



    @media only screen and (max-width: 991px) {
        .top_header {
            display: block;
            clear: both;
            width: 100%;
            position: unset;
            height: auto;
            text-align: center;
        }

        .top_header img {
            display: inline-block;
            position: unset;
            top: 0px;
        }

        .top_header .top_tx_head {
            position: unset;
            display: inline-block;
            width: 100%;
            top: 4px;
            font-size: 14px;
            text-align: center;
            left: 50%;
            transform: none;
        }

        .reg_ings_sect p {
            text-align: left;
        }

    }
    </style>





    <p></p>
    @endforeach







</body>

</html>