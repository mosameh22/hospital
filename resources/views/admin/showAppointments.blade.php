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


                <div class="container">
                    @if (session()->has('Add'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('Add') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    <h1 class="mt-5">Show Appointments</h1>

                    <table class="table table-dark table-striped mt-3">

                            <td>No</td>
                            <td>Name</td>
                            <td>phone</td>
                            <td>email</td>
                            <td>specialization</td>
                            <td>age</td>
                            <td>date</td>
                            <td>Time From</td>
                            <td>Time To</td>
                            <td>opreations</td>
                        </tr>
                            @php
                            $i=0;
                        @endphp
                        @foreach ($Appontments as $Appontment)

                        @php
                        $i ++;
                    @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$Appontment->name}}</td>
                            <td>{{$Appontment->phone}}</td>
                            <td>{{$Appontment->email}}</td>
                            <td>{{$Appontment->spec?->spec_name}}</td>
                            <td>{{$Appontment->age}}</td>
                            <td>{{$Appontment->date}}</td>
                            <td>{{$Appontment->time_from}}</td>
                            <td>{{$Appontment->time_to}}</td>
                            <td>
                                <a class="btn btn-danger" href="{{url('deleteAppo/'.$Appontment->id)}}" role="button">delete</a>
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
