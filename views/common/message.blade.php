@section('page_scripts')
  <script type="text/javascript">
    @foreach (session('flash_notification', collect())->toArray() as $message)
      M.toast({html: '{!! $message['message'] !!}'})
    @endforeach
  </script>
@endsection
{{ session()->forget('flash_notification') }}
