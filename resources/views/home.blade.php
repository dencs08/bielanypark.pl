@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Lokale') }}</div>
                    <div class="list container">
                        <div class="row">
                            @if(!empty($results))
                            @foreach($results as $result)
                                    <div class="col-md-4">
                                        <div class="card my-4">
                                            <div class="card-header">
                                                <h3>Lokal: <span class="fw-bold">{{$result->name}}</span></h3>
                                                <p class="my-0">Status: <span class="fw-bold">{{$result->available}}</span></p>
                                                <p class="my-0">Widoczność: <span class="fw-bold">{{$result->visible}}</span></p>
                                            </div>
                                            <div class="card-body">
                                                <button id="" class="btn btn-primary my-2" data-toggle="modal" data-target="#exampleModal" data-name="{{$result->name}}" data-visible="{{$result->visible}}" data-available="{{$result->available}}" data-id="{{$result->id}}">Edytuj</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lokal <span></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      
      <form id="editForm" action="/storefrontedit" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden"  id="id" name="id" value="">
      <div class="modal-body">
        <div class="form-group my-2">
            <label for="available">Status</label>
            <select class="form-select" name="available" id="available">
                <option value="Dostępne">Dostępne</option>
                <option value="Sprzedane">Sprzedane</option>
                <option value="Zarezerwowane">Zarezerwowane</option>
                <option value="Wynajęte">Wynajęte</option>
            </select>
        </div>
        <div class="form-group my-2">
            <label for="visible">Widoczność</label>
            <select class="form-select" name="visible" id="visible">
                <option value="Widoczne">Widoczne</option>
                <option value="Niewidoczne">Niewidoczne</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection


@section('js')
<script>
    $('#exampleModal').on('show.bs.modal', function (e) {
    var button = $(e.relatedTarget)
    var id = button.data('id')
    var name = button.data('name')
    var available = button.data('available')
    var visible = button.data('visible')
    var modal = $(this)

    modal.find('.modal-title').text('Lokal ' + name)
    modal.find('#id').val(id)
    modal.find('#available').val(available)
    modal.find('#visible').val(visible)
    modal.find('#visible').val(visible)
})
</script>
@endsection