@section('page_scripts')
  @if(!empty($errors))
      @if($errors->any())
          <script type="text/javascript">
              @foreach($errors->all() as $error)
                  M.toast({html: '{{ $error }}', classes: 'red'})
              @endforeach
          </script>
      @endif
  @endif
@endsection