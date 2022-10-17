<!-- BEGIN: Header-->

<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
  <div class="navbar-container d-flex content">
    <div class="bookmark-wrapper d-flex align-items-center">
      <?php
      date_default_timezone_set('Asia/jakarta');
      ?>
      <b><span id="clock" style="font-size:15"></span>&nbsp;&nbsp;</b>
      <!-- Menampilkan Jam (Aktif) -->
      <script type="text/javascript">
        <!--
        function showTime() {
          var a_p = "";
          var today = new Date();
          var curr_hour = today.getHours();
          var curr_minute = today.getMinutes();
          var curr_second = today.getSeconds();
          if (curr_hour < 24) {
            a_p = "AM";
          } else {
            a_p = "PM";
          }
          if (curr_hour == 0) {
            curr_hour = 24;
          }
          if (curr_hour > 24) {
            curr_hour = curr_hour - 24;
          }
          curr_hour = checkTime(curr_hour);
          curr_minute = checkTime(curr_minute);
          curr_second = checkTime(curr_second);
          document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }

        function checkTime(i) {
          if (i < 10) {
            i = "0" + i;
          }
          return i;
        }
        setInterval(showTime, 500);
        //
        -->
      </script>

      <!-- Menampilkan Hari, Bulan dan Tahun -->
      <span id="tanggal" style="font-size:15"></span>
      <script type='text/javascript'>
        <!--
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
          'November', 'Desember'
        ];
        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var thisDay = date.getDay(),
          thisDay = myDays[thisDay];
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
        document.getElementById("tanggal").innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
        //
        -->
      </script>
    </div>
    <ul class="nav navbar-nav align-items-center ms-auto">

      <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
      </li>
      <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Muhammad Chaidar M</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
          <div class="dropdown-divider"></div><a class="dropdown-item" href="/login"><i class="me-50" data-feather="power"></i> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<!-- END: Header-->