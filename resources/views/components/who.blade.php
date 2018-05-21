<!--check user-->
@if (Auth::guard('web')->check())
  <p class="text-success">
    USER
  </p>
@else
<p class="text-danger">
  ADMIN
</p>
@endif

<!--check admin-->
@if (Auth::guard('admin')->check())
  <p class="text-success">
    ADMIN
  </p>
@else
<p class="text-danger">
  USER
</p>
@endif
