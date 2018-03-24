<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jurnal - {{date('F Y')}}</title>
    <style>
      body {
        background: white;
        font-family: "Times New Roman";
        font-size:20px;
      }

      table.white tr td{
        background: white;
      }
      page {
        background: white;
        display: block;
        margin: 0 auto;
        /* margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5); */
      }
      page[size="A4"] {
        width: 21cm;
        height: 29.7cm;
      }
      page[size="A4"][layout="portrait"] {
        width: 29.7cm;
        height: 21cm;
      }
      page[size="A3"] {
        width: 29.7cm;
        height: 42cm;
      }
      page[size="A3"][layout="portrait"] {
        width: 42cm;
        height: 29.7cm;
      }
      page[size="A5"] {
        width: 14.8cm;
        height: 21cm;
      }
      page[size="A5"][layout="portrait"] {
        width: 21cm;
        height: 14.8cm;
      }

      table .jurnal {
          border-collapse: collapse;
          width: 100%;
      }

      th, td {
          text-align: left;
          padding: 8px;
      }

      tr:nth-child(even){background-color: #f2f2f2}

      th {
          background-color: #FBEE1C;
          color: black;
      }
          </style>
  </head>
  <body onload="window.print()">
    @php
      setLocale(LC_ALL,'IND');
    @endphp
    <page size="A4">
      <center>
        <table width="100%">
          <tr>
            <td>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="{{asset('assets/img/logo.png')}}" width="100px" alt="">
            </td>
            <td>
              <center>
                <font size="5"><b>PEMERINTAH KOTA BANDUNG</b></font> <br>
                <font size="6"><b>KECAMATAN BANDUNG KULON</b></font> <br>
                <font size="2">Jl. Holis No.210/191 A Telp. (022) 6015113 Bandung 40212</font>
              </center>
            </td>
          </tr>
        </table>
      </center>

      <hr>
      <hr style="margin-top:-10px">
      <hr style="margin-top:-11px">
      <hr style="margin-top:-12px">

      <p>Gaji Belum Dibayarkan</p>
      <p>Tanggal : <b>{{date('2 F Y')}}</b></p>

      <table border="1" class="jurnal" width="100%">
        <thead>
          <tr>
            <th width="30%">Keterangan</th>
            <th width="30%">Debit</th>
            <th width="30%">Kredit</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Beban Gaji</td>
            <td>Rp.{{number_format($gaji-$potongan)}}</td>
            <td>-</td>
          </tr>

          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hutang Gaji</td>
            <td>-</td>
            <td>Rp.{{number_format($gaji-$potongan)}}</td>
          </tr>
        </tbody>
      </table>

      <br>
      <br>
      <hr>
      <br>
      <br>

      <p>Gaji Sudah Dibayarkan</p>
      <p>Tanggal : <b>{{date('2 F Y')}}</b></p>

      <table border="1" class="jurnal" width="100%">
        <thead>
          <tr>
            <th width="30%">Keterangan</th>
            <th width="30%">Debit</th>
            <th width="30%">Kredit</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Hutang Gaji</td>
            {{-- <td>Rp.{{number_format($potongan)}}</td> --}}
            <td>Rp.{{number_format($gaji-$potongan)}}</td>
            <td>-</td>
          </tr>

          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kas</td>
            <td>-</td>
            {{-- <td>Rp.{{number_format($potongan)}}</td> --}}
            <td>Rp.{{number_format($gaji-$potongan)}}</td>
          </tr>
        </tbody>
      </table>

      <br><br><br>
      <table width="100%" class="white">
        <tr>
          <td style="text-align:center;">Camat Bandung Kulon</td>
          <td style="text-align:center;">Bendahara Gaji</td>
          <td style="text-align:center;">Bendahara Pengeluaran</td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>&nbsp; </td>
          <td></td>
        </tr>
        <tr>
          <td style="text-align:center;"><u>Drs.Dadan Haeri G M.Si</u></td>
          <td style="text-align:center;"><u>Nurhayati</u> </td>
          <td style="text-align:center;"><u>Dani Ardiansah</u> </td>
        </tr>
        <tr>
          <td style="text-align:center;">NIP.196010091981011001</td>
          <td style="text-align:center;">NIP.19730912200701200</td>
          <td style="text-align:center;">NIP.19751005200701101</td>
        </tr>
      </table>


    </page>
  </body>
</html>
