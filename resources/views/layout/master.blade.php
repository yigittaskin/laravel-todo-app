<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Yapılacaklar Listesi</title>
    <link rel="icon" href="https://static-00.iconduck.com/assets.00/todo-icon-2048x2048-m7wp6prw.png">

    <style>
      .todo-box {
            border: 3px solid #000;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 12px;
        }
        .bg-bekliyor {
          background-color: #fc8365;
        }
        .bg-tamamlandi {
          background-color: #2ffa62;
          opacity: .4;
        }
        .baslik {
          font-size: 20px;
        }
        .aciklama {
          font-size: 18px;
          font-weight: 500;
        }
        .actions {
          @media screen and (max-width: 768px) {
            margin-top: 12px;
          }
        }
    </style>
  </head>
  <body>
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>