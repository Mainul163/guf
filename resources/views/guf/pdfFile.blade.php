<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
    @font-face {
        font-family: "kalpurush";
        font-style: normal;
        font-weight: normal;
        src: url(kalpurush.ttf) format('truetype');
    }

    * {
        font-family: "kalpurush";
    }
    </style>




    <style type="text/css">
    body {
        margin: 0;
        font-size: 85%;
    }

    @font-face {
        font-family: "kalpurush.ttf";
        src: url("kalpurush.ttf")
    }

    .custom-font {
        font: normal 20px/18px kalpurush;
    }
    </style>





















</head>

<body class="profile_main">



    @foreach($gufData as $row)







    <div class="pdf_main_wrap">

        <img class="imgtop001"
            src="{{'data:image/jpg;base64,'.base64_encode(file_get_contents(public_path('logo/'.'guf_logo.jpg')))}}"
            alt="">

        <div class="top_header">
            <img src="{{'data:image/jpg;base64,'.base64_encode(file_get_contents(public_path('logo/'.'guf_logo.jpg')))}}"
                alt="" width="120">
            <div class="top_tx_head">
                <h3 class="top_title">Ghiyas Uddin Foundation</h3>
                Address: Chakaria-4741, Coxs Bazar, Chattogram.
                <br>

            </div>

        </div>
        <div class="pdf_Reg_info">
            <h3>Registration Letter</h3>
            <div class="reg_tbl_info">
                <table class="reg_table">
                    <tbody>
                        <tr>
                            <th>Apply date</th>
                            <td>{{$row->date}}</td>
                        </tr>
                        <tr>
                            <th>Regestration id</th>
                            <td>{{$row->id}}</td>
                        </tr>

                        <tr>
                            <th>victim name</th>
                            <td>{{$row->victim_name}}</td>
                        </tr>

                        <tr>
                            <th>Victim's national identity card</th>
                            <td>{{$row->victim_national_id}}</td>
                        </tr>
                        <tr>
                            <th>Victim's mobile number</th>
                            <td>{{$row->victim_mobile}}</td>
                        </tr>
                        <tr>
                            <th>Division</th>
                            <td>{{$row->victim_division}}</td>
                        </tr>

                        <tr>
                            <th>District</th>
                            <td>{{$row->victim_district}}</td>
                        </tr>
                        <tr>
                            <th>Thana</th>
                            <td>{{$row->victim_thana}}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
            <div class="reg_ings_section">
                <div class="bar_cd">
                    {!! DNS1D::getBarcodeHTML("$row->id", 'C128')!!}
                    <p>Regestration Barcode</p>
                </div><br>
                <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('images/'.$row->img)))}}"" width='100%' height='200px' alt='image'
                  class=" border rounded" />

                <p>Victim's Picture</p>
            </div>

        </div>
        <div class="graduatred_info">
            <table class="table_btm">
                <tbody>
                    <tr>
                        <th>Description of the difficulty</th>
                        <td>{{$row->message}}</td>
                    </tr>
                    <tr>
                        <th> Required money</th>
                        <td>{{$row->required_money}}</td>
                    </tr>
                    <tr>
                        <th> Time of need</th>
                        <td>{{$row->time}}</td>
                    </tr>
                    <tr>
                        <th>Applicant Name</th>
                        <td>{{$row->name}}</td>
                    </tr>
                    <tr>
                        <th>Applicant's national identity card</th>
                        <td>{{$row->national_id}}</td>
                    </tr>
                    <tr>
                        <th>Division</th>
                        <td>{{$row->division}}</td>
                    </tr>

                    <tr>
                        <th>District</th>
                        <td>{{$row->district}}</td>
                    </tr>
                    <tr>
                        <th>Thana</th>
                        <td>{{$row->thana}}</td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>






    <style>
    @font-face {
        font-family: "kalpurush";
        font-style: normal;
        font-weight: normal;
        src: url(kalpurush.ttf) format('truetype');
    }

    * {
        font-family: "kalpurush";
    }

    .top_title {
        color: #1c3795;
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
        top: 4px;
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
        height: 150px;

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
        top: 20px
    }

    .top_header .top_tx_head h3 {
        font-size: 20px;
    }

    .reg_tbl_info {
        width: 380px;
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
        font-size: 13px;
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
        font-size: 13px;
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
        margin: 5px 0;
        padding: 5px 8px;
        color: #ea1f26;
        font-size: 13px;
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
        width: 190px;
        object-fit: cover;
        height: 200px;
        margin-top: 40px;
    }

    .bar_cd p {
        padding: 0 !important;
        margin: 0 !important;
    }

    .imgbtn001 {
        width: 100%;
    }

    .imgtop001 {
        position: absolute;
        width: 90px;
        right: 0px;
        top: 25px;
    }

    .imgmid001 {
        position: absolute;
        width: 470px;
        left: 50%;
        transform: translate(-50%, -50%);
        top: 50%;
        z-index: -1;
        opacity: 0.5;
    }
    </style>















    <p></p>
    @endforeach







</body>

</html>