@if($attendance->data->is_holiday_today)
<span class="badge text-bg-success rounded-pill">Hari Libur</span>
@else

@if ($attendance->data->is_start)
<img src="{{asset('img/reqric.png')}}" height="50" />
<span class="badge bg-primary rounded-pill">Jam Masuk</span>
@elseif($attendance->data->is_end)
<span class="badge bg-warning rounded-pill">Jam Pulang</span>
@else
<img src="{{asset('img/ngelu.png')}}" height="40" />
<span class="badge bg-danger rounded-pill">Tutup</span>
@endif

@endif