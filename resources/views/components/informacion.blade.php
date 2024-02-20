<div class="alert alert-{{$tipo}} d-flex align-items-center alert-dismissible" role="alert">
    <span class="alert-icon text-{{$tipo}} me-2">
      <i class="ti ti-{{$icono}} ti-xs"></i>
    </span>
    {{$slot}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
