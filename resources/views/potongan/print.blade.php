<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Slip Gaji - {{$potongan->pegawai->nama}}</title>
    <style media="all">
      body {
        background: rgb(204,204,204);
        font-family: arial;
        font-size:10px;
      }
      page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
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
      page[size="custome"] {
        width: 12cm;
        height: 8.8cm;
      }
      page[size="custome"][layout="portrait"] {
        padding: 0.3cm;
        width: 8.6cm;
        height: 11.8cm;
      }

      @media print {  
        @page {
          padding: 0.3cm;
          width: 8.6cm;
          height: 11.8cm;
        }
      }
    </style>
  </head>
  <body onload='window.print()'>
    @php
      setLocale(LC_ALL,'IND');
    @endphp
    <page size="custome" layout="portrait">
      <table width=100% style="border:solid 1px">
        <tr>
          <td>
            <center>
              <b style="text-transform: uppercase;">
                PERINCIAN GAJI<br>
                KARYAWAN/TI KECAMATAN BANDUNG KULON<br>
                BULAN {{strftime('%B %Y')}}
              </b>
              <br><br>
            </center>
            @php
//              dd($potongan->pegawai->nama);
            @endphp
            <table>
              <tr>
                <td width="50%">Nama</td>
                <td>:</td>
                <td>{{$potongan->pegawai->nama}}</td>
              </tr>
              <tr>
                <td>NIP</td>
                <td>:</td>
                <td>{{$potongan->pegawai->nip}}</td>
              </tr>
              <tr>
                <td>Golongan</td>
                <td>:</td>
                <td>{{$potongan->pegawai->golongan->nama}}</td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>{{$potongan->pegawai->jabatan->nama}}</td>
              </tr>
              <tr>
                <td>Unit Kerja</td>
                <td>:</td>
                <td>Kecamatan Bandung Kulon</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>I GAJI NETO SES BG KKN</td>
                <td>:</td>
                <td>Rp {{number_format($potongan->pegawai->gaji->gaji)}}</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>II POTONGAN</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;1 KPKB</td>
                <td></td>
                <td>Rp {{number_format($potongan->kpkb)}}</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;2 BPD</td>
                <td></td>
                <td>-</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;3 2,5% Zakat</td>
                <td></td>
                <td>Rp {{number_format($potongan->zakat)}}</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;4 D.Wanita</td>
                <td></td>
                <td>Rp {{number_format($potongan->dharma)}}</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;5 Sumber Makmur</td>
                <td></td>
                <td>Rp {{number_format($potongan->makmur)}}</td>
              </tr>
              <tr>
                <td>JUMLAH POTONGAN</td>
                <td>:</td>
                <td>Rp {{number_format(($potongan->kpkb) + ($potongan->zakat) + ($potongan->dharma) + ($potongan->makmur))}}</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>JUMLAH YANG DITERIMA</td>
                <td>:</td>
                <td>Rp {{number_format(($potongan->pegawai->gaji->gaji) - (($potongan->kpkb) + ($potongan->zakat) + ($potongan->dharma) + ($potongan->makmur)))}}</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
              </tr>
            </table>
            <center>
              Bandung, {{strftime('%d %B %Y')}}<br>
              <b style="text-transform: uppercase;">
                SPP GAJI KECAMATAN BANDUNG KULON<br>
                BULAN {{strftime('%B %Y')}}
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <u>NURHAYATI</u><br>
                NIP. 197309122007012008
              </b>
              <br><br>
            </center>
          </td>
        </tr>
      </table>
    </page>
  </body>
</html>
