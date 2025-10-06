<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .logo a {
            text-decoration: none;
            color: red;
            font-size: 20px;
            color: #ff0000ff;
        }

        span {
            color: blue;
        }

        body {
            background-color: #DDE8FF;
        }

        .header {
            background-color: white;
        }
        .card{
            background-color: white;
        }
    </style>
    <header class='header'>
        <div class="logo">
            <a href="#">
                <h1><span>НАРУШЕНИЙ</span>.НЕТ</h1>
            </a>
        </div>
    </header>
    <div class="main">
        <div class="container">
            <div class="con-button">
                <button>Создать заявление</button>
            </div>
            
           <div class="menu">
            <div class="card">
             @foreach ($reports as $report)
                <p>{{$report-> number}}</p>
                <p>{{$report-> description}}</p>
             @endforeach 
            </div>
            <div class="card">
               
            </div>
            <div class="card">
              
            </div>
           </div>
        </div>
    </div>
</body>

</html>