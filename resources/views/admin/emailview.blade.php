
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

    <base href="/publlic">

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

        <form action="{{url('sendemail',$data->id)}}" method="post">
            @csrf
        <div style="padding:10px;">
        <label>Greetings</label>
        <input type="text" name="greeting" style="color:black;" required>
        </div>

         <div style="padding:10px;">
        <label>Body:</label>
        <input type="text" name="body" style="color:black;" required>
        </div>


        <div style="padding:10px;">
        <label>Action Text:</label>
        <input type="text" name="actiontext" style="color:black;" required>
        </div>

        <div style="padding:10px;">
        <label>Action URL:</label>
        <input type="text" name="actionurl" style="color:black;" required>
        </div>

        <div style="padding:10px;">
        <label>End Part:</label>
        <input type="text" name="endpart" style="color:black;" required>
        </div>

        <div style="padding:15px;">
        <input type="submit" class="btn btn-success" value="Send Mail">
        </div>



        </form>

        </div>



    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>