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
            Utilisateur 
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
                  Utilisateur
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <form     method="POST" enctype="multipart-data">
                          @csrf
                           <div class="modal-content">
                              <br><br><br>
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Ajouter Utilisateur</h5>
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
                                    <label  class="">Prénom</label>
                                    <input name="prenom" id="cin" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label  class="">CIN</label>
                                    <input name="cin" id="bareme" placeholder="" type="text" class="form-control">
                                 </div>
                                 <div class="position-relative form-group col-6">
                                    <label  class="">Email</label>
                                    <input name="adress" id="adress" placeholder="" type="text" class="form-control">
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
                  <div>les utilisateurs</div>
               </div>
               <div class="card-body">
                  <table style="width: 100%;" id="example2" class="table table-hover table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>NOM</th>
                           <th>Email</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($users as $user)
                        <tr>
                           <td>{{$user->id}}</td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           <td>
                            <div class="action_btn margin-left-10">
                                 <form action="{{ route('utilisateur.destroy', $user->id)}}" method="post">
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
<script type="text/javascript" ></script>
</body>
@endsection