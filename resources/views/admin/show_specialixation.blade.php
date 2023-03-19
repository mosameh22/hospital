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
                    <h1 class="mb-5">Show specializations</h1>

                    <table class="table table-dark table-striped">

                            <td>No</td>
                            <td>Specliazation</td>
                            <td>operations</td>
                        </tr>
                            @php
                            $i=0;
                        @endphp
                        @foreach ($specializations as $specialization)

                        @php
                        $i ++;
                    @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$specialization->spec_name}}</td>
                            <td>
                            <a class="btn btn-danger" href="{{url('deletespeca/'.$specialization->id)}}" role="button">delete</a>

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
