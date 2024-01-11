
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <style type="text/css">

        label
        {
            display:inline-block;
            width:200px;
        }
    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.nav')

        <div class="container-fluid page-body-wrapper">

        
        <div class="container" align="center" style="padding-top:50px;">
         
         @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">
        x
        </button>
        {{session()->get('message')}}

            </div>
        @endif

        <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div style="padding:10px;">
        <label>Doctor's Name:</label>
        <input type="text" name="name" placeholder="Name Of Doctor:" style="color:black;" required>
        </div>

         <div style="padding:10px;">
        <label>Phone:</label>
        <input type="number" name="phone" placeholder="Phone number:" style="color:black;" required>
        </div>

         <div style="padding:10px;">
        <label>Speciality:</label>
        <select name="speciality" style="color:black; width:200px;">
        <option value="skin" style="color:black;">--Select--</option>
        <option value="skin" style="color:black;">Skin</option>
        <option value="heart" style="color:black;">Heart</option>
        <option value="eye" style="color:black;">Eye</option>
        <option value="nose" style="color:black;">Nose</option>
        </select>
        </div>

        <div style="padding:10px;">
        <label>Room no.:</label>
        <input type="number" name="room" placeholder="Room number:" style="color:black;" required>
        </div>

         <div style="padding:15px;">
        <label>Image :</label>
        <input type="file" name="file" placeholder="Image" required>
        </div>

        <div style="padding:15px;">
        <input type="submit" class="btn btn-success">
        </div>



        </form>

        </div>



    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>