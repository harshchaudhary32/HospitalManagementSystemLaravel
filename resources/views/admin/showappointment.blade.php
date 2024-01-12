
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.nav')

        <div class="container-fluid page-body-wrapper">

            <div align="center" style="padding:100px;">
            <table>
            <tr style="background-color:black;">
            <th style="padding:10px">Customer Name</th>
            <th style="padding:10px">Email</th>
            <th style="padding:10px">Phone</th>
            <th style="padding:10px">Doctor Name</th>
            <th style="padding:10px">Date</th>
            <th style="padding:10px">Message</th>
            <th style="padding:10px">Status</th>
            <th style="padding:10px">Approve</th>
            <th style="padding:10px">Reject</th>
            </tr>


            @foreach($data as $appoint)
            <tr style="background-color:green;">
            <td style="padding:10px">{{$appoint->name}}</td>
            <td style="padding:10px">{{$appoint->email}}</td>
            <td style="padding:10px">{{$appoint->phone}}</td>
            <td style="padding:10px">{{$appoint->doctor}}</td>
            <td style="padding:10px">{{$appoint->date}}</td>
            <td style="padding:10px">{{$appoint->message}}</td>
            <td style="padding:10px">{{$appoint->status}}</td>
            <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
            <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Rejected</a></td>

            </tr>

            @endforeach
            </table>


            </div>

         </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>