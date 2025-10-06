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
            
             @foreach ($reports as $report)
                @method('delete')
                @csrf
              <div class="card">
                <p>{{$report-> number}}</p>
                <p>{{$report-> description}}</p>
                <input type="submit" value="удалить" >
              </div>
             @endforeach 
            
           </div>
        </div>
    </div>
</body>

</html>