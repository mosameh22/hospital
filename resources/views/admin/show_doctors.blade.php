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
                    <h1 class="mb-5">Show Doctors</h1>

                    <table class="table table-dark table-striped">

                            <td>No</td>
                            <td>Name</td>
                            <td>Specliazation</td>
                            <td>phone</td>
                            <td>Address</td>
                            <td>operations</td>
                        </tr>
                            @php
                            $i=0;
                        @endphp
                        @foreach ($show_doctors_admin as $show_doctor_admin)
                        @php
                        $i ++;
                    @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$show_doctor_admin->name}}</td>
                            <td>{{$show_doctor_admin->spec?->spec_name}}</td>
                            <td>{{$show_doctor_admin->phone}}</td>
                            <td>{{$show_doctor_admin->address}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{url('edit_doctors/'.$show_doctor_admin->id)}}" role="button">edit</a>
                                <a class="btn btn-danger" href="{{url('delete/'.$show_doctor_admin->id)}}" role="button">delete</a>

                            </td>

                        </tr>
                        @endforeach
                      </table>
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
