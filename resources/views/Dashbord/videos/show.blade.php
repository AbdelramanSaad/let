@extends('Dashbord.layout.master')

@section('content')

     <div class="col-sm-12">

العنوان :
<br>
{{ $video->title }}
<hr>
     </div>

     
 
<div class="col-sm-12">

الصوره :
<br>
<img src="{{ asset('videos/'.$video->img) }}" alt="" style="height:250px;width:250px">
<hr>
</div>
<div class="col-sm-12">

اللينك :
<br>
{{ $video->link }}
<hr>
</div>
<div class="col-sm-12">

وقت العرض :
<br>
{{ $video->created_at }}
<hr>
 
</div>
{{-- </div> --}}

@endsection