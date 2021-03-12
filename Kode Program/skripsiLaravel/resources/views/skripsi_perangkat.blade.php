<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('assets/unpar.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    <title>Print Sensing | Skripsi</title>
    <link href="{{ asset('css/skripsi_mainstyle.css') }}" rel="stylesheet" type="text/css" >
</head>
<style>
    body{
        background-image: url("assets/under_maintenance.jpg") ;
        background-repeat: repeat-y;
        background-size: 100%;
        padding-left: 99px;
        padding-right: 108px;}
        
    .dropbtn {
          background-color: lightgrey;
          color: black;
          padding: 4px;
          font-size: 15px;
          border: none;
          cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
          background-color: #EEEDED;
        }

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #EEEDED;
          min-width: 160px;
          overflow: auto;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
</style>
<body>
    @include('skripsi_header')
    
    <div style="position:center;margin-top:20px">
        <form action="/print-sensing/cari" method="GET">
            
            <a style="color:white">Mulai :</a> 
            <input placeholder="Date" name="cariAwal" class="textbox-n" type="text" onfocus="(this.type='date')" id="date" value="{{ old('cariAwal') }}">
            
            <a style="color:white; padding-left:10px">Sampai :</a>
            <input placeholder="Date" name="cariAkhir" class="textbox-n" type="text" onfocus="(this.type='date')" id="date" value="{{ old('cariAkhir') }}">
            
            <input type="submit" value="cari">
        </form>
        
                    
        
              
        <button onclick="window.print()" style="float:right;style="border-radius:5px;"">Print</button>
        
        <div class="dropdown" style="float:right;margin-right:10px">
          <button onclick="myFunction()" class="dropbtn">Urutkan <i class="fas fa-angle-down"></i> </button>
          <div id="myDropdown" class="dropdown-content">
            <a href="/print-sensing/sortkode">Kode Petak</a>
            <a href="/print-sensing">Waktu Sensing</a>
          </div>
        </div>
    </div>
    
    
    <table style="margin-top: 24px;float: left; width:100%;" id="table1">
    
      <tr style="background-color: rgba(0, 0, 0, 0.5)">
        <!--<th>ID Sensing</th>
        <th>Jenis Tanah</th> -->
        <th>Kode Petak</th> 
        <th>Waktu Sensing</th> 
        <th>Keasaman (pH)</th> 
        <th>Kelembaban Tanah</th> 
        <th>Kelembaban Udara</th> 
        <th>Suhu Tanah</th> 
        <th>Suhu Udara</th> 
      </tr>
      @foreach ($tanah1 as $tanah1)
      <tr>
        <!--<td>{{$tanah1->id_tanah}}</td>-->
        <!--<td>{{$tanah1->jenis_tanah}}</td>-->
        <td>{{$tanah1->kode_petak}}</td>
        <td>{{$tanah1->waktu_sensing}}</td>
        <td>{{$tanah1->ph_tanah}}</td>
        <td>{{$tanah1->kelembaban_tanah}}</td>
        <td>{{$tanah1->kelembaban_udara}}</td>
        <td>{{$tanah1->suhu_tanah}}</td>
        <td>{{$tanah1->suhu_udara}}</td>
    
        
      </tr>
      @endforeach
    </table>
    
<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
</script>
    
</body>

</html>
