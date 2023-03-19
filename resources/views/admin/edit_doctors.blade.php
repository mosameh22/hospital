<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      </head>
      <body>
<div class="container">
    @if (session()->has('Add'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('Add') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
    <form action="{{url('update/'.$doctors->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control w-50" id="exampleFormControlInput1" name="name" value="{{$doctors->name}}">
        </div>
        {{-- <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Specliazation</label>
            <input type="text" class="form-control w-50" id="exampleFormControlInput1" name="spec_id" value="{{$doctors->spec?->id}}" >
        </div> --}}

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">phone</label>
            <input type="text" class="form-control w-50" id="exampleFormControlInput1" name="phone" value="{{$doctors->phone}}">
        </div>
        <div class="mb-3">
            <select class="form-select w-50 bg-white text-dark" name="spec_id" aria-label="Default select example">
                <option value="">Select specializations </option>
                @foreach ($spec as $spe)
                <option value="{{$spe->id}}" >{{$spe->spec_name}}</option>
                @endforeach
              </select>

          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input type="text" class="form-control w-50" id="exampleFormControlInput1" name="address" value="{{$doctors->address}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
      </body>
    </html>
    </x-app-layout>
