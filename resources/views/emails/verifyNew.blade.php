<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کد تأیید ورود</title>
    <style>
        body {
            font-family: 'Tahoma', Arial, sans-serif;
            background-color: #f4f4f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #279e8c;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        .email-body {
            padding: 30px;
            text-align: center;
        }

        .email-body h1 {
            font-size: 22px;
            color: #333;
        }

        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        .verification-code {
            font-size: 32px;
            font-weight: bold;
            color: #279e8c;
            letter-spacing: 5px;
            margin: 20px 0;
        }

        .email-footer {
            background-color: #f4f4f7;
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #999;
        }

        .email-footer a {
            color: #02caac;
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            background-color: #279e8c;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #02caac;
        }

    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            ورود دو مرحله‌ای | سایت شما
        </div>

        <!-- Body -->
        <div class="email-body">
            <h1>سلام خوش آمدید</h1>
            <p>از اینکه به ما اعتماد کرده‌اید متشکریم. برای تکمیل فرآیند ورود، لطفاً کد تأیید زیر را در سایت وارد کنید:</p>

            <div class="verification-code">{{ $code }}</div>

            <p>اگر شما این درخواست را انجام نداده‌اید، نگران نباشید. می‌توانید این ایمیل را نادیده بگیرید.</p>
            
            <a href="{{ url('/') }}" class="btn text-white">بازگشت به سایت</a>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>تمام حقوق محفوظ است &copy; {{ date('Y') }} سایت شما</p>
            <p><a href="{{ url('/') }}">تماس با پشتیبانی</a></p>
        </div>
    </div>
</body>
</html>
