<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            direction: rtl;
        }
        .logo {
            margin-bottom: 20px;
            width: 200px;
            border-radius: 4px;
        }
        .info {
            display: flex;
            justify-content: space-between;
            gap: 60px;
        }
        .info div {
            flex: 1;
            text-align: right;
            padding: 0 10px;
        }
    </style>
</head>
<body>
<div class="container">
{{--    <img  src="{{asset('backend_theme/images/image1.png')}}" alt="Logo" class="logo">--}}
    <h2> هذا البريد الإلكتروني من : {{$data['formValidationEmail']}}</h2>
    <div class="info">

        <div>
            <h3>
                اسم الاول
            </h3>
            <p>
                {{$data['formValidationUsername']}}
            </p>
        </div>
        <div>
            <h3>
                اسم العائلة
            </h3>
            <p>
               {{$data['formValidationUserFamilyName']}}
            </p>
        </div>



    </div>
    <div class="info">

        <div>
            <h3>
                رقم الهاتف
            </h3>
            <p>
                {{$data['phone_number']}}  {{$data['country_code']}}
            </p>
        </div>
        <div>
            <h3>
                الوضع المهني
            </h3>
            <p>
                {{$data['customRadioTemp']}}
            </p>
        </div>


    </div>
    <div class="info">

        <div>
            <h3>
                الحالة المهنية
            </h3>
            <p>
                {{$data['customRadioTemp_work_status']}}
            </p>
        </div>
        <div>
            <h3>
                راس المال
            </h3>
            <p>
                {{$data['customRadioTemp_budget']}}
            </p>
        </div>



    </div>
    <div class="info">

        <div>
            <h3>
                وفت التواصل
            </h3>
            <p>
                {{$data['customRadioTemp_contact_time']}}
            </p>
        </div>



    </div>
</div>
</body>
</html>


