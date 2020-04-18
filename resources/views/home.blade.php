<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>GregetDev</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .card {
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>

</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                API Kategori Berita
            </div>
            <div class="links">
                <div class="card" style=" width:53%; float: left;">
                    <div class="container" style="background-color:#FBFCFD; border-radius: 5px;">
                        <h4><b><b>GET | </b> http://127.0.0.1:8000/search</b></h4>
                    </div>
                    <div class="container">
                        <h4><b>Request Parameters</b></h4>
                        <p style="text-align: left"><b>category :</b> The category you want to get headlines for. Possible options: Hukum, Politik, Kesehatan, Ekonomi, Tekbologi, Olahraga
                            <br><br><b>q :</b> Keywords or a phrase to search for.<br><br>
                            <b>page :</b> Use this to page through the results</p>
                    </div>
                </div>

                <div class="card" style=" width:45%; float: right;">
                    <div class="container" style="background-color:#FBFCFD; border-radius: 5px;">
                        <h4><b><b>GET | </b> http://127.0.0.1:8000/all-category</b></h4>
                    </div>
                    <div class="container">
                        <h4><b>Request Parameters</b></h4>
                        <p style="text-align: left">
                        <b>page</b> : Use this to page through the results
                        <p><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>