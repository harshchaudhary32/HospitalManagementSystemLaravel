
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
            <th style="padding:10px">Doctor Name</th>
            <th style="padding:10px">Phone</th>
            <th style="padding:10px">speciality</th>
            <th style="padding:10px">room no.</th>
            <th style="padding:10px">doctor image</th>
            <th style="padding:10px">Delete</th>
            <th style="padding:10px">Update</th>
    
            </tr>
            @foreach($data as $doctor)
            <tr  style="background-color:green;">
            <td>{{($doctor->name)}}</td>
            <td>{{($doctor->phone)}}</td>
            <td>{{($doctor->speciality)}}</td>
            <td>{{($doctor->room)}}</td>
            <td><img height="100" width="100" src="doctorimage/{{($doctor->image)}}"{{($doctor->image)}}</td>
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure want to delete doctor data ?')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
             <td><a class="btn btn-primary" href="{{url('updatedoctor')}}">Update</a></td>

            </tr>
        @endforeach
            </div>
       </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>