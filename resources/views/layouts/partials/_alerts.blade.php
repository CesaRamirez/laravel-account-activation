@if (session('success'))
  <alert text="{{ session('success') }}"></alert>
@elseif (session('status'))
  <alert text="{{ session('status') }}"></alert>
@endif
