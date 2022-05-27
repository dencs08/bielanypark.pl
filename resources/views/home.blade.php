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
                                <!-- @if($result->available == 1)
                                    {{$result->available = "Dostępne"}}
                                @endif -->
                                <!-- @if($result->available == 0)
                                    {{$result->available = "Sprzedane"}}
                                @endif -->
                                <!-- @if($result->visible == 1)
                                    {{$result->visible = "Widoczne"}}
                                @endif -->
                                <!-- @if($result->visible == 0)
                                    {{$result->visible = "Niewidoczne"}}
                                @endif -->
                                    <div class="col-md-4">
                                        <div class="card my-4">
                                            <div class="card-header">
                                                <h3>Lokal: <span class="fw-bold">{{$result->name}}</span></h3>
                                                <p class="my-0">Status: <span class="fw-bold">{{$result->available}}</span></p>
                                                <p class="my-0">Widoczność: <span class="fw-bold">{{$result->visible}}</span></p>
                                            </div>
                                            <div class="card-body">
                                                <button id="" class="btn btn-primary my-2" data-toggle="modal" data-target="#exampleModal" data-name="{{$result->name}}" data-visible="{{$result->visible}}" data-available="{{$result->available}}">Edytuj</button>
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

      {{ csrf_field() }}
      {{ method_field('PUT') }}
      
      <form id="editForm" action="/storefront" method="POST">
      <div class="modal-body">
        <div class="form-group my-2">
            <label for="available">Status</label>
            <input type="text" name="available" id="available" class="form-control" placeholder="Dostępność lokalu">
        </div>
        <div class="form-group my-2">
            <label for="visible">Widoczność</label>
            <input type="text" name="visible" id="visible" class="form-control" placeholder="Widoczność lokalu"> 
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
      </div>
    </div>
  </div>
</div>
@endsection


@section('js')
<script>
    $('#exampleModal').on('show.bs.modal', function (e) {
    var button = $(e.relatedTarget)
    var name = button.data('name')
    var available = button.data('available')
    var visible = button.data('visible')
    var modal = $(this)

    modal.find('.modal-title').text('Lokal ' + name)
    modal.find('#available').val(available)
    modal.find('#visible').val(visible)
})
</script>
@endsection