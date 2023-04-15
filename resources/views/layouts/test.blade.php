<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TEST</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
                @yield('content')
        <script src="" async defer></script>
    </body>
</html>
<!--@foreach($organisations as $org)
                  <tr>
                    <td class="text-center" style="width: 50px;"></td>
                    <td>{{ $org->legal_name }}</td>
                    <td>{{ $org->source }}</td>
                    <td>{{ $org->inn }}</td>
                    <td class="text-center" style="width: 100px;">Actions</td>
                    <td class="text-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Edit">
                          <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-times"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                @endforeach -->