<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include('admin.css')

      </head>
      <body>
        <div class="container-scroller">
          <!-- partial:partials/_sidebar.html -->
         @include('admin.sidebar')
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')

            <div class="container-fluid page-body-wrapper">

                <div class="container">
                    @if (session()->has('Add'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('Add') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    <h1 class="mb-5">Add specializations</h1>

                   <form action="{{url('add_specializations')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> specializations Name</label>
                        <input type="text" class="form-control w-50 bg-dark text-white" id="spec_name" placeholder="" name="spec_name">
                      </div>

                      <button type="submit" class="btn btn-primary btn-lg">submit</button>

                   </form>
                </div>
            </div>

            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        @include('admin.js')

      </body>
    </html>
    </x-app-layout>
