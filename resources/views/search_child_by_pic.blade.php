<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
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
        </style>
    </head>
    <body>
        <div class="container">
          <div class="row">
              <img src="/imgs/children/UploadYes1.jpeg" alt="UploadYes1" style="max-height: 100px";> 
              <img src="/imgs/children/UploadYes2.jpeg" alt="UploadYes2" style="max-height: 100px";>  
              <img src="/imgs/children/UploadYes3.jpeg" alt="UploadYes3" style="max-height: 100px";>   
          </div>

          <div class="row">
              <img src="/imgs/children/Upload1.jpeg" alt="Upload1" style="max-height: 100px";>  
              <img src="/imgs/children/Upload2.jpeg" alt="Upload2" style="max-height: 100px";>  
              <img src="/imgs/children/Upload3.jpeg" alt="Upload3" style="max-height: 100px";>  
          </div>

        <form>
          <div class="form-group">
            <label for="pic">Please Upload Picture</label>
            <br><br>
            <input type="file" class="form-control-file" id="child_pic">
          </div>
        </form>
        </div>
    </body>
</html>
