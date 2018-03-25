<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--<style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>--}}
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">


                    <div class="row"><label for="">Test Project Creation</label></div>
                    <form action="{{route("api.project.store")}}" method="post">
                        <div class="row">
                            <div class="col-md-1">
                                <label for="">Author id</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="author_id" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Name</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Body</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="body" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Status</label>
                            </div>
                            <div class="col-md-2">
                                <select name="status" class="form-control">
                                    @forelse($statuses as $status)
                                        <option value="{{$status->name}}">{{$status->name}}</option>
                                    @empty

                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" class="btn btn-success" value="Create">
                        </div>
                    </form>


                    <div class="row"><label for="">Test Task Creation</label></div>
                    <form action="{{route("api.task.store")}}" method="post">
                        <div class="row">
                            <div class="col-md-1">
                                <label for="">Author id</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="author_id" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Project id</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="project_id" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Name</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Description</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="description" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <label for="">Mark</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="mark" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Status</label>
                            </div>
                            <div class="col-md-2">
                                <select name="status" class="form-control">
                                    @forelse($statuses as $status)
                                        <option value="{{$status->name}}">{{$status->name}}</option>
                                    @empty

                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" class="btn btn-success" value="Create">
                        </div>
                    </form>


                    <div class="row"><label for="">Test User Creation</label></div>
                    <form action="{{route("api.user.store")}}" method="post">
                        <div class="row">
                            <div class="col-md-1">
                                <label for="">Name</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Surname</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="surname" value="">
                            </div>
                            <div class="col-md-1">
                                <label for="">Email</label>
                            </div>
                            <div class="col-md-2">
                                <input type="email" class="form-control" name="email" value="">
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" class="btn btn-success" value="Create">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
