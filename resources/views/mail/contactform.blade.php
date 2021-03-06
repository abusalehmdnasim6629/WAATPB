<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .shadow {
      -webkit-border-radius: 0% 0% 100% 100% / 0% 0% 8px 8px;
      -webkit-box-shadow: rgba(0, 0, 0, .30) 0 2px 3px;
    }

    .container {
      margin: 0 auto;
      margin-top: 50px;
      ;

      height: 80vh;
      background: #F2F2F2;
      border: 1px solid #ccc;
      box-shadow: 1px 1px 2px #fff inset,
        -1px -1px 2px #fff inset;
      border-radius: 3px/6px;


    }

  </style>

</head>

<body>
  <div class="shadow">
    <div class="container">
      <h3>Contact Information:</h3>
      <br>
      <table>
        <tr>
          <td>Name</td>
          <td>{{$data->name}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{$data->email}}</td>
        </tr>
        <tr>
          <td>Comments</td>
          <td>{{$data->comments}}</td>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>