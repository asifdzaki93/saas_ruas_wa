


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong><a href="#">Swalayan Hasbuna</a> Masa Khidmah &copy; 2020-2021.</strong>
    
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.2
    </div>
  </footer>


  
</div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/vendor/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Popper -->
<script src="assets/vendor/adminlte/plugins/popper/popper.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/vendor/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="assets/vendor/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="assets/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="assets/vendor/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<!-- ChartJS -->
<!-- <script src="assets/vendor/adminlte/plugins/chart.js/Chart.min.js"></script> -->
<script src="assets/vendor/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/vendor/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/vendor/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/vendor/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/vendor/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- datepicker -->
<!-- <script src="assets/vendor/adminlte/plugins/bootstrap-datepicker2/locales/bootstrap-datepicker.min.js"></script> -->
<script src="assets/vendor/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- daterangepicker -->
<script src="assets/vendor/adminlte/plugins/moment/moment.min.js"></script>
<script src="assets/vendor/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/vendor/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/vendor/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/vendor/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/vendor/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/vendor/adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/vendor/adminlte/dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="assets/vendor/adminlte/plugins/moment/moment.min.js"></script>
<script src="assets/vendor/adminlte/plugins/fullcalendar/main.min.js"></script>
<script src="assets/vendor/adminlte/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="assets/vendor/adminlte/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="assets/vendor/adminlte/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="assets/vendor/adminlte/plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- <script src="https://cdn.datatables.net/plug-ins/1.10.25/filtering/row-based/range_dates.js"></script> -->






<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        console.log(eventEl);
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }    
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      ini_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
<script>
  
</script>

    
<script>
  $(document).ready(function(){
    
   // $(".edit").hide();

   $('#bukukas').DataTable({
    // columnDefs: [
    //     { targets: [0,1,2,3,4,5,6,7,8], visible: true},
    //     { targets: '_all', visible: false }
    // ],
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : false,
    "pageLength"  : 50
  });

   $('#table-datatable').DataTable({
    // columnDefs: [
    //     { targets: [0,1,2,3,4,5,6,7,8], visible: true},
    //     { targets: '_all', visible: false }
    // ],
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false,
    "pageLength"  : 5
  });

   $('#table-datatable2').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : false,
    'ordering'    : true,
    'info'        : false,
    'autoWidth'   : false,
    "pageLength"  : 2
  });


 });
  
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
  }).datepicker("setDate", new Date());

  $('.mulai').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd',
  }).datepicker("setDate", new Date());

  $('.sampai').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd',
  }).datepicker("setDate", new Date());

  $('.datepicker2').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd',
  }).datepicker("setDate", new Date());


</script>


<script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

  var barChartData = {
    labels : ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des"],
    datasets : [
    {
      label: 'Pemasukan',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
      <?php
      for($bulan=1;$bulan<=12;$bulan++){
        $thn_ini = date('Y');
        $pemasukan = mysqli_query($koneksi,"select sum(transaksi_nominal) as total_pemasukan from transaksi where transaksi_jenis='Pemasukan' and month(transaksi_tanggal)='$bulan' and year(transaksi_tanggal)='$thn_ini'");
        $pem = mysqli_fetch_assoc($pemasukan);

        // $total = str_replace(",", "44", number_format($pem['total_pemasukan']));
        $total = $pem['total_pemasukan'];
        if($pem['total_pemasukan'] == ""){
          echo "0,";
        }else{
          echo $total.",";
        }

      }
      ?>
      ]
    },
    {
      label: 'Pengeluaran',
      fillColor : "rgba(255, 51, 51, 0.8)",
      strokeColor : "rgba(248, 5, 5, 0.8)",
      highlightFill : "rgba(151,187,205,0.75)",
      highlightStroke : "rgba(151,187,205,1)",
      data : [
      <?php
      for($bulan=1;$bulan<=12;$bulan++){
        $thn_ini = date('Y');
        $pengeluaran = mysqli_query($koneksi,"select sum(transaksi_nominal) as total_pengeluaran from transaksi where transaksi_jenis='pengeluaran' and month(transaksi_tanggal)='$bulan' and year(transaksi_tanggal)='$thn_ini'");
        $peng = mysqli_fetch_assoc($pengeluaran);

        // $total = str_replace(",", "44", number_format($peng['total_pengeluaran']));
        $total = $peng['total_pengeluaran'];
        if($peng['total_pengeluaran'] == ""){
          echo "0,";
        }else{

          echo $total.",";
        }
      }
      ?>
      ]
    }
    ]

  }


  var barChartData2 = {
    labels : [
    <?php 
    $tahun = mysqli_query($koneksi,"select distinct year(transaksi_tanggal) as tahun from transaksi order by year(transaksi_tanggal) asc");
    while($t = mysqli_fetch_array($tahun)){
      ?>
      "<?php echo $t['tahun']; ?>",
      <?php 
    }
    ?>
    ],
    datasets : [
    {
      label: 'Pemasukan',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
      <?php
      $tahun = mysqli_query($koneksi,"select distinct year(transaksi_tanggal) as tahun from transaksi order by year(transaksi_tanggal) asc");
      while($t = mysqli_fetch_array($tahun)){
        $thn = $t['tahun'];
        $pemasukan = mysqli_query($koneksi,"select sum(transaksi_nominal) as total_pemasukan from transaksi where transaksi_jenis='Pemasukan' and year(transaksi_tanggal)='$thn'");
        $pem = mysqli_fetch_assoc($pemasukan);
        $total = $pem['total_pemasukan'];
        if($pem['total_pemasukan'] == ""){
          echo "0,";
        }else{
          echo $total.",";
        }

      }
      ?>
      ]
    },
    {
      label: 'Pengeluaran',
      fillColor : "rgba(255, 51, 51, 0.8)",
      strokeColor : "rgba(248, 5, 5, 0.8)",
      highlightFill : "rgba(151,187,205,0.75)",
      highlightStroke : "rgba(254, 29, 29, 0)",
      data : [
      <?php
      $tahun = mysqli_query($koneksi,"select distinct year(transaksi_tanggal) as tahun from transaksi order by year(transaksi_tanggal) asc");
      while($t = mysqli_fetch_array($tahun)){
        $thn = $t['tahun'];
        $pemasukan = mysqli_query($koneksi,"select sum(transaksi_nominal) as total_pengeluaran from transaksi where transaksi_jenis='Pengeluaran' and year(transaksi_tanggal)='$thn'");
        $pem = mysqli_fetch_assoc($pemasukan);
        $total = $pem['total_pengeluaran'];
        if($pem['total_pengeluaran'] == ""){
          echo "0,";
        }else{
          echo $total.",";
        }

      }
      ?>
      ]
    }
    ]

  }



  window.onload = function(){
    var ctx = document.getElementById("grafik1").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });

   var ctx = document.getElementById("grafik2").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData2, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });
  }

</script>


</body>
</html>