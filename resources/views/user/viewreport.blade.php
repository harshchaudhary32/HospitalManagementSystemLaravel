
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>My Appointment</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  </head>
  <body>
    
  <!-- Back to top button -->
  <div class="back-to-top">></div>

  @include('user.header')
        <div align="center" style="padding:70px">
            <table>
                 <tr style="background-color:black;" align="center">
                    <th style="padding:10px; font-size:20px; color:white;">Checked By</th>
                    <th style="padding:10px; font-size:20px; color:white;">Check-Up Date</th>
                    <th style="padding:10px; font-size:20px; color:white;">Symptoms</th>
                    <th style="padding:10px; font-size:20px; color:white;">Advise</th>
                    <th style="padding:10px; font-size:20px; color:white;">Prescription</th>
                    <th style="padding:10px; font-size:20px; color:white;">Follow-Up Date</th>
                    </tr>
                
                @foreach($appoint as $appoints)
                <tr style="background-color:green;">
                <td style="padding:10px; font-size:20px; color:white;"></td>
                 <td style="padding:10px; font-size:20px; color:white;"></td>
                 <td style="padding:10px; font-size:20px; color:white;"></td>
                 <td style="padding:10px; font-size:20px; color:white;"></td>
                 <td style="padding:10px; font-size:20px; color:white;"></td>
                 <td style="padding:10px; font-size:20px; color:white;"></td>
                
                @endforeach
        </table>
        </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  </body>
</html>