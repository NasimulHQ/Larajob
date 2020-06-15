@component('mail::message')

   Kire, {{$data['friend_name']}} ,{{$data['your_name']}}
   Ei Lok Job Patahise....
@component('mail::button', ['url' => $data['jobUrl']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
