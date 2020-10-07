<html>
<head>
    <title>Письмо с сайта  yaroshaa.com</title>
    <meta charset="utf8">
</head>

<body>
    <div>
        <h2><span style="color: #ff7800;"> Письмо с сайта {{ $data['site'] }} </span></h2>
           <ul style="list-style-type: none; padding-left: 0px;">
            <li style="padding-top:5px; padding-bottom: 5px;" ><span style="color:#636363;">Тема письма: </span><strong><span style="color: #424242; ">{{ $data['subject'] }}</span></strong></li>
            <li style="padding-top:5px; padding-bottom: 5px;" ><span style="color:#636363;">Автор письма: </span><strong><span style="color: #424242;">{{ $data['author'] }}</span></strong></li>
            <li style="padding-top:5px; padding-bottom: 5px;" ><span style="color:#636363;">Email автора: </span><strong><span style="color: #424242;">{{ $data['email'] }}</span></strong></li>
            <li style="padding-top:5px; padding-bottom: 5px;" ><span style="color:#636363;">Текст письма: </span></li>
        </ul>

        <p>
            {{ $data['text'] }}
        </p>
    </div>

</body>
</html>
