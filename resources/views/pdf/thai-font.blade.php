<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>
        .font-lobster-two {
            font-family: 'Lobster Two', cursive;
        }
    </style>
</head>
<body>
    <!-- font จะแสดงตาม weight ที่ถูกต้องเท่านั้น ถ้าไม่มี bold มาด้วย h1 จะไม่แสดง font นั้น -->
    <h1 class="font-lobster-two">{{ $title }}</h1>
    <p class="font-lobster-two">{{ $content }}</p>
</body>
</html>
