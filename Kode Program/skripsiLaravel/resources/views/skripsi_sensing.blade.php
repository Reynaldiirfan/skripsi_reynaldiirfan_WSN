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

    <title>Sensing | Skripsi</title>
    <link href="{{ asset('css/skripsi_mainstyle.css') }}" rel="stylesheet" type="text/css" >
</head>
{{-- <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('c559846b0d74d3af1611', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script> TADINYA UNTUK WEBSOCKET--}}  
<style>
    body{
        background-image: url("assets/sensing_bg.jpg") ;
        background-size: cover;
        padding-left: 99px;
        padding-right: 108px;
    }
</style>
<body>
  @include('skripsi_header')

    <table style="margin-top: 15px;float: left; width:45%;" id="table1">
      @foreach ($nodes1 as $node1)
      <tr style="background-color: rgba(0, 0, 0, 0.5)">
        <th>Variable</th>
        <th>Value</th> 
      </tr>
      <tr>
          <td>Nama Node</td>
          <td id="namanode1">{{ $node1->nama_node }}</td>
        </tr>
      <tr>
        <td>Keasaman (pH)</td>
        <td id="node1_ph">{{ $node1->ph_tanah }}</td>
      </tr>
      <tr>
        <td>Kelembaban Tanah</td>
        <td id="node1_lembab">{{ $node1->kelembaban_tanah }} %</td>
      </tr>
      <tr>
        <td>Suhu Tanah</td>
        <td id="node1_suhuTh">{{ $node1->suhu_tanah }} <span>&#8451;</span></td>
      </tr>
      <tr>
        <td>Suhu Udara</td>
        <td id="node1_suhu">{{ $node1->suhu_udara }} <span>&#8451;</span></td>
      </tr>
      <tr>
        <td>Waktu Sensing</td>
        <td id="node1_waktu">{{ $node1->waktu_sensing }}</td>
      </tr>
      @endforeach
    </table>

    <table style="margin-top: 15px;float: left; width:45%;" id="table2">
      @foreach ($nodes2 as $node2)
      <tr style="background-color: rgba(0, 0, 0, 0.5)">
        <th>Variable</th>
        <th>Value</th> 
      </tr>
      <tr>
          <td>Nama Node</td>
          <td>{{ $node2->nama_node }}</td>
        </tr>
      <tr>
        <td>Keasaman (pH)</td>
        <td id="node2_ph">{{ $node2->ph_tanah }}</td>
      </tr>
      <tr>
        <td>Kelembaban Tanah</td>
        <td id="node2_lembab">{{ $node2->kelembaban_tanah }} %</td>
      </tr>
      <tr>
        <td>Suhu Tanah</td>
        <td id="node2_suhuTh">{{ $node2->suhu_tanah }} <span>&#8451;</span></td>
      </tr>
      <tr>
        <td>Suhu Udara</td>
        <td id="node2_suhu">{{ $node2->suhu_udara }} <span>&#8451;</span></td>
      </tr>
      <tr>
        <td>Waktu Sensing</td>
        <td id="node2_waktu">{{ $node2->waktu_sensing }} </td>
      </tr>
      @endforeach
    </table>

    <br>

    <table style="margin-top: 16px;float: left; width:45%;" id="table3">
      @foreach ($nodes3 as $node3)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $node3->nama_node }}</td>
          </tr>
        <tr>
          <td>Keasaman (pH)</td>
          <td id="node3_ph">{{ $node3->ph_tanah }}</td>
        </tr>
        <tr>
          <td>Kelembaban Tanah</td>
          <td id="node3_lembab">{{ $node3->kelembaban_tanah }} %</td>
        </tr>
        <tr>
          <td>Suhu Tanah</td>
          <td id="node3_suhuTh">{{ $node3->suhu_tanah }} <span>&#8451;</span></td>
        </tr>
        <tr>
          <td>Suhu Udara</td>
          <td id="node3_suhu">{{ $node3->suhu_udara }} <span>&#8451;</span></td>
        </tr>
        <tr>
          <td>Waktu Sensing</td>
          <td id="node3_waktu">{{ $node3->waktu_sensing }} </td>
        </tr>
        @endforeach
    </table>

    <table style="margin-top: 20px;float: left; width:45%;" id="table4" >
      @foreach ($nodes4 as $node4)
      <tr style="background-color: rgba(0, 0, 0, 0.5)">
        <th>Variable</th>
        <th>Value</th> 
      </tr>
      <tr>
          <td>Nama Node</td>
          <td>{{ $node4->nama_node }}</td>
        </tr>
      <tr>
        <td>Keasaman (pH)</td>
        <td id="node4_ph">{{ $node4->ph_tanah }}</td>
      </tr>
      <tr>
        <td>Kelembaban Tanah</td>
        <td id="node4_lembab">{{ $node4->kelembaban_tanah }} %</td>
      </tr>
      <tr>
        <td>Suhu Tanah</td>
        <td id="node4_suhuTh">{{ $node4->suhu_tanah }} <span>&#8451;</span></td>
      </tr>
      <tr>
        <td>Suhu Udara</td>
        <td id="node4_suhu">{{ $node4->suhu_udara }} <span>&#8451;</span></td>
      </tr>
      <tr>
        <td>Waktu Sensing</td>
        <td id="node4_waktu">{{ $node4->waktu_sensing }} </td>
      </tr>
      @endforeach
    </table>

    <button style="visibility:hidden;" class="button button4" onclick="changeButtonText()" value="online" id="sensing_button" style="margin-top: 140px;margin-right: 15px;">Pause Alert</button>
    
    <!-- <div style="margin-left:15px;margin-top: 468px;">
      <img src="assets/back.png"><a href="/" style="color: white;">Kembali</a>
    </div> -->
    
    <script>
 

  var buttonSensing = document.getElementById('sensing_button').value;
  var statusSensing = "true";
  

  function changeButtonText(){
    if(buttonSensing=="offline"){ 
      document.getElementById('sensing_button').innerHTML = 'Stop Sensing';
      buttonSensing = "online";
      alert("Sensing akan dimulai !");
      statusSensing = "true";
      location.reload(),6000;
      return false;
      
      
    }
    else{ 
      document.getElementById('sensing_button').innerHTML = 'Mulai Sensing';
      alert("Sensing dihentikan! Klik OK untuk melanjutkan sensing");
      
      
      var table1 = document.getElementById('table1');
      var table2 = document.getElementById('table2');
      var table3 = document.getElementById('table3');
      var table = document.getElementById('table4');
      var lengthTable = table.rows.length;

      for(i=1;i<lengthTable;i++){
        var cells = table.rows.item(i).cells;
        var cells1 = table1.rows.item(i).cells;
        var cells2 = table2.rows.item(i).cells;
        var cells3 = table3.rows.item(i).cells;

        //gets amount of cells of current row
        var cellLength =cells.length;

        //loops through each cell in current row
        for(var j = 1; j < cellLength; j++){
          /* get your cell info here */
          cells.item(j).innerHTML= '-';
          cells1.item(j).innerHTML= '-';
          cells2.item(j).innerHTML= '-';
          cells3.item(j).innerHTML= '-';
        }
      }
      buttonSensing = "offline";
      statusSensing = "false";
    }
  }
  
    if(statusSensing=="true"){
        setTimeout(function() {
        location.reload();
      }, 5000);
    }

    //CHECK KLASIFIKASI PH TANAH
    var nPh1 = parseFloat(document.getElementById('node1_ph').textContent);
    var nPh2 = parseFloat(document.getElementById('node2_ph').textContent);
    var nPh3 = parseFloat(document.getElementById('node3_ph').textContent);
    //var nPh4 = parseFloat(document.getElementById('node4_ph').textContent);

    if(nPh1!=7){
        document.getElementById('node1_ph').style.color = "yellow";
    }
    if(nPh2!=7){
        document.getElementById('node2_ph').style.color = "yellow";
    }
    
    if(nPh3!=7){
        document.getElementById('node3_ph').style.color = "yellow";
    }
    /**
    if(nPh4!=7){
        document.getElementById('node4_ph').style.color = "yellow";
    }
    **/

    //CHECK KLASIFIKASI KELEMBABAN TANAH
    var nLembab1 = parseFloat(document.getElementById('node1_lembab').textContent);
    var nLembab2 = parseFloat(document.getElementById('node2_lembab').textContent);
    var nLembab3 = parseFloat(document.getElementById('node2_lembab').textContent);
    //var nLembab4 = parseFloat(document.getElementById('node2_lembab').textContent);

    if(nLembab1<40 || nLembab1>62){
        document.getElementById('node1_lembab').style.color = "yellow";
    }
    if(nLembab2<40 || nLembab2>62){
        document.getElementById('node2_lembab').style.color = "yellow";
    }
    
    if(nLembab3<40 || nLembab3>62){
        document.getElementById('node3_lembab').style.color = "yellow";
    }
    /**
    if(nLembab4<40 || nLembab4>62){
        document.getElementById('node4_lembab').style.color = "yellow";
    }
    **/

    //CHECK KLASIFIKASI SUHU TANAH
    var nSuhuTh1 = parseFloat(document.getElementById('node1_suhuTh').textContent);
    var nSuhuTh2 = parseFloat(document.getElementById('node2_suhuTh').textContent);
    var nSuhuTh3 = parseFloat(document.getElementById('node3_suhuTh').textContent);
    //var nSuhuTh4 = parseFloat(document.getElementById('node4_suhuTh').textContent);
  

    if(nSuhuTh1<10 || nSuhuTh1>30){
        document.getElementById('node1_suhuTh').style.color = "yellow";
    }
    if(nSuhuTh2<10 || nSuhuTh2>30){
        document.getElementById('node2_suhuTh').style.color = "yellow";
    }
    
    if(nSuhuTh3<10 || nSuhuTh3>30){
        document.getElementById('node3_suhuTh').style.color = "yellow";
    }
    /**
    if(nSuhuTh4<10 || nSuhuTh4>30){
        document.getElementById('node4_suhuTh').style.color = "yellow";
    }
    **/

    //CHECK KLASIFIKASI SUHU UDARA
    var nSuhu1 = parseFloat(document.getElementById('node1_suhu').textContent);
    var nSuhu2 = parseFloat(document.getElementById('node2_suhu').textContent);
    var nSuhu3 = parseFloat(document.getElementById('node3_suhu').textContent);
    //var nSuhu4 = parseFloat(document.getElementById('node4_suhu').textContent);
  

    if(nSuhu1<18 || nSuhu1>26){
        document.getElementById('node1_suhu').style.color = "yellow";
    }
    if(nSuhu2<18 || nSuhu2>26){
        document.getElementById('node2_suhu').style.color = "yellow";
    }
    
    if(nSuhu3<18 || nSuhu3>26){
        document.getElementById('node3_suhu').style.color = "yellow";
    }
    /**
    if(nSuhu4<18 || nSuhu4>26){
        document.getElementById('node4_suhu').style.color = "yellow";
    }
    **/
    
 


    

  

</script>
</body>
</html>



