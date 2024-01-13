
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

    <base href="/public">

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

        <form action="{{url('upload_report')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div style="padding:10px;">
        <label>check-up date:</label>
        <input type="date" name="checkupdate" style="color:black;" required>
        </div>

         <div style="padding:10px;">
        <label>Symptoms:</label>
        <input type="text" name="symptoms" placeholder="Symptoms:" style="color:black;" required>
        </div>


        <div style="padding:10px;">
        <label>Advise:</label>
        <input type="text" name="advise" placeholder="Room number:" style="color:black;" required>
        </div>

         <div style="padding:15px;">
        <label>IPrescription :</label>
        <input type="text" name="prescription" placeholder="Image" required>
        </div>


        <div style="padding:10px;">
        <label>Follow-up date:</label>
        <input type="date" name="followupdate" style="color:black;" required>
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