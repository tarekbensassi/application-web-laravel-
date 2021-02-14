@extends('admin.layouts.master')
@section('content')
<div class="app-page-title">
   <div class="page-title-wrapper">
      <div class="page-title-heading">
         <div class="page-title-icon">
            <i class="pe-7s-medal icon-gradient bg-tempting-azure">
            </i>
         </div>
         <div>
            Ajouter examen 
            <div class="page-title-subheading"> </div>
         </div>
      </div>
   </div>
   <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="row">
         <div class="col-md-12">
         @if(session('status'))
              <div class="alert alert-success">{{ session('status') }}</div>
          @endif
            <div class="main-card mb-3 card">
               <div class="card-body">
                  <h5 class="card-title"></h5>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Ajouter Examen
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <form  action="{{route('examen.store')}}" method="POST" enctype="multipart-data">
                           <div class="modal-content">
                              <br><br><br>
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Ajouter Examen</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 @csrf
                                 <div class="position-relative form-group col-6">
                                    <label  class="">Nom </label>
                                    <input name="nom" id="nom" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label  class="">Bareme</label>
                                    <input name="bareme" id="barem" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label  class="">Nombre de question</label>
                                    <input name="nbq" id="nbq" placeholder="" type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="reset" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                                 <button type="submit" class="btn btn-primary">Enregistre</button> 
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
 
         <div class="col-sm-1 col-md-7 col-xl-11">
            <div class="mb-3 card">
               <div class="card-header-tab card-header">
                  <div>liste des examens</div>
               </div>
               <div class="card-body">
                  <table style="width: 100%;" id="example2" class="table table-hover table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Nom d'examen</th>
                           <th>nombre de question</th>
                           <th>bareme</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($examen as $ex)
                        <tr>
                           <td>{{ $ex->id }}</td>
                           <td>{{ $ex->nom }}</td>
                           <td>{{ $ex->nbq }}</td>
                           <td>{{ $ex->bareme }}</td>
                           <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-ex="{{$ex->id}}">
                              Modifier  {{ $ex->id }}
                              </button>
                              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <form  action="{{ route('examen.update', $ex->id)}}" method="POST" enctype="multipart-data">
                                    
                                    @method('PATCH')
                                    @csrf
                                       <div class="modal-content">
                                          <br><br><br>
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Modifier Examen</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                            
                                             <div class="position-relative form-group col-6">
                                                <label  class="">Nom </label>
                                                <input name="nom" id="nom" placeholder="" type="text" class="form-control" value="{{ $ex->nom }}">
                                             </div>
                                             <div class="position-relative form-group col-6">
                                                <label  class="">Bareme</label>
                                                <input name="bareme" id="bareme" placeholder="" type="text" class="form-control" value="{{ $ex->bareme }}">
                                             </div>
                                             <div class="position-relative form-group col-6">
                                                <label  class="">Nombre de question</label>
                                                <input name="nbq" id="nbq" placeholder="" type="text" class="form-control" value="{{ $ex->nbq }}" >
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="reset" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                                             <button type="submit" class="btn btn-primary">Enregistre</button> 
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="action_btn margin-left-10">
                                 <form action="{{ route('examen.destroy', $ex->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                 </form>
                              </div>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="{{('assets/scripts/main.87c0748b313a1dda75f5.js')}}"></script>
<script type="text/javascript" >
   $('#exampleModalLabel').on('show.bs.modal', function (event) {
     var button = $(event.relatedTarget) // Button that triggered the modal
     var nom = button.data('whatever')
   
     var bareme = button.data('whatever')
     var nbq = button.data('whatever')
      // Extract info from data-* attributes
     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     var modal = $(this)
     modal.find('.modal-title').text('New message to ' + recipient)
     modal.find('.modal-body input').val(recipient)
   })
   
   
</script>
</body>
@endsection