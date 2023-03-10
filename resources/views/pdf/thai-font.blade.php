<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <style>
        .font-lobster-two {
            font-family: 'Lobster Two', cursive;
        }
        .font-sarabun {
            font-family: 'Sarabun', sans-serif;
        }
        .italic {
            font-style: italic;
        }
        .font-semibold {
            font-weight: 600;
        }
        .text-blink {
            color: pink;
        }
    </style>
    <!-- meta นี้ไม่ต้องมีก็ได้ -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <!-- font จะแสดงตาม weight ที่ถูกต้องเท่านั้น ถ้าไม่มี bold มาด้วย h1 จะไม่แสดง font นั้น -->
    <h1 class="font-lobster-two">{{ $title }}</h1>
    <p class="font-lobster-two">{{ $content }}</p>
    <hr>
    <hr>
    <h2 class="font-sarabun">ทดสอบภาษาไทย</h2>
    <!-- ภาษาไทยต้อง style ด้วย font thai ไม่งั้นไม่แสดง -->
    <p class="">น้องนีดีใจ ได้ไปคอนเสิร์ต</p>
    <p class="font-sarabun">น้องนีดีใจ <span class="font-semibold italic text-blink">ได้ไปคอนเสิร์ต</span></p>
</body>
</html>
