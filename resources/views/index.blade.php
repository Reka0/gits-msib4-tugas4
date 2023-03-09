<?php
Log::error();
?>
<table>
    <thead>
       <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Spesialis</th>
       </tr>
    </thead>
    <tbody>
       @foreach ($dokter as $dtr)
          <tr>
             <td>{{ $dtr->id }}</td>
             <td>{{ $dtr->nama }}</td>
             <td>{{ $dtr->spesialis }}</td>
          </tr>
       @endforeach
    </tbody>
 </table>

 