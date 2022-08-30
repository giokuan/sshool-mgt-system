<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>

    <div class="container" style="margin-top:20px">
        <div class="row">

            <div class="col-md-12">
                <h2 >Add Student</h2>

              @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
                @endif  
                <form method="post" action="{{url('save-student')}}">
                @csrf

                <div class="md-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                    @error('name')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror

                </div>

                <div class="md-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                    @error('email')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{old('phone')}}">
                    @error('phone')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror
                </div>

                <div class="md-3">
                    <label class="form-label">Address</label>
                    <textarea type="text" class="form-control" name="address" placeholder="Enter Address" >{{old('address')}}</textarea>
                    @error('address')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror
                </div><br>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('student-list')}}" class="btn btn-danger">Back</a>
            
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>