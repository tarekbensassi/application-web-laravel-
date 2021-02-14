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
            Candidat 
            <div class="page-title-subheading"> </div>
         </div>
      </div>
   </div>
   <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="row">
         <div class="col-md-12">
         @if (session('status'))
            <div class="alert alert-success">
               {{ session('status') }}
            </div>
            @endif
            <div class="main-card mb-3 card">
               <div class="card-body">
                  <h5 class="card-title"></h5>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Ajouter Candidat
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <form  action="{{route('condidat.store')}}" method="POST" enctype="multipart-data">
                        @csrf
                           <div class="modal-content">
                              <br><br><br>
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Ajouter candidat</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 
                                 <div class="position-relative form-group col-6">
                                    <label  class="">Nom </label>
                                    <input name="nom" id="nom" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label  class="">prenom </label>
                                    <input name="prenom" id="prenom" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label  class="">email</label>
                                    <input name="email" id="email" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label  class="">Téléphone</label>
                                    <input name="tel" id="tel" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label  class="">CIN</label>
                                    <input name="cin" id="cin" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label for="departement" class="">Liste département </label>
                                    <select name="departement" id="departement" class="form-control">
                                       @foreach ($departement as $dep)
                                       <option value="{{$dep->id}}">{{$dep->nom}}</option>
                                       @endforeach
                                    </select>
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
                  <div>liste des candidat</div>
               </div>
               <div class="card-body">
                  <table style="width: 100%;" id="example2" class="table table-hover table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>Nom</th>
                           <th>prenom</th>
                           <th>Email</th>
                           <th>Cin</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($candidat as $item)
                        <tr>
                           <td>{{$item->nom}}</td>
                           <td>{{$item->prenom}}</td>
                           <td>{{$item->email}}</td>
                           <td>{{$item->cin}}</td>
                           <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-ex="{{$item->id}}">
                              Modifier  {{ $item->id }}
                              </button>
                              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                 <form action="{{route('condidat.update', $item->id )}}"  method="POST" enctype="multipart-data">
                                 @csrf
                                 @method('PATCH')
                                    <div class="modal-content">
                                       <br><br><br>
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modifier Candidat</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                       
                                          <div class="position-relative form-group col-6">
                                             <label  class="">Nom </label>
                                             <input name="nom" id="nom" placeholder="" type="text" class="form-control" value="{{$item->nom}}"> 
                                          </div>
                                          <div class="position-relative form-group col-6">
                                             <label  class="">prénom</label>
                                             <input name="prenom" id="prenom" placeholder="" type="text" class="form-control" value="{{$item->prenom}}">
                                          </div>
                                          <div class="position-relative form-group col-6">
                                             <label  class="">Email</label>
                                             <input name="email" id="email" placeholder="" type="text" class="form-control" value="{{$item->email}}" >
                                          </div>
                                          <div class="position-relative form-group col-6">
                                             <label  class="">CIN</label>
                                             <input name="cin" id="cin" placeholder="" type="text" class="form-control" value="{{$item->cin}}" >
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
     // Button that triggered the modal
     var nom = button.data('whatever')
   
     var prenom = button.data('whatever')
     var adress = button.data('whatever')
     var tel = button.data('whatever')
     var email = button.data('whatever')
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