@extends('admin.layouts.master')
@section('content')
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-medal icon-gradient bg-tempting-azure">
                                    </i>
                                </div>
  <div> Affectation Examen  
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                                                </div>           
                        <!-- Modal -->


              
                                       <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                 <div class="card-body"><h5 class="card-title"></h5>
                                           

                                        </div>

                  <div class="card-body">


                     <div class="col-md-12">
         @if (session('status'))
            <div class="alert alert-success">
               {{ session('status') }}
            </div>
            @endif
            <div class="main-card mb-3 card">

               <div class="card-body">
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Affectation des Examens
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <form  action="{{route('Affectationex.store')}}" method="POST" enctype="multipart-data">
                        @csrf
                           <div class="modal-content">
                              <br><br><br>
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">affectation examen</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 
                              
                                
                                 <div class="position-relative form-group col-6">
                                    <label for="departement" class="">Liste département </label>
                                    <select name="candidat" id="candidat" class="form-control">
                                       @foreach ($candidat as $cd)
                                       <option value="{{$cd->id}}">{{$cd->nom}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 
                                 <div class="position-relative form-group col-6">
                                    <label for="departement" class="">Liste département </label>
                                    <select name="departement" id="departement" class="form-control">
                                      @foreach ($examen as $ex)
                                       <option value="{{$ex->id}}">{{$ex->nom}}</option>
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



                          </div>







  <div class="card-body">
                  <table style="width: 100%;" id="example2" class="table table-hover table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Nom candidat  </th>
                           <th>Examen  </th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                 @foreach ($affecte as $aff)
                   @foreach ($examen as $ex)
                     @foreach ($candidat as $cd)
                     @if ( $aff->idexamen == $ex->id || $aff->idcandidat==$cd->id)
                        <tr>
                     
                           <td> {{ $aff->id }} </td>
                           <td> {{ $cd->nom }} </td>
                           <td> {{ $ex->nom }} </td>
                           <td>
                           
                              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <form  action="" method="POST" enctype="multipart-data">
                                 
                                       <div class="modal-content">
                                          <br><br><br>
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Modifier Departement</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             
                                             <div class="position-relative form-group col-6">
                                                <label  class="">Nom </label>
                                                <input name="nom" id="nom" placeholder="" type="text" class="form-control" value="">
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
                                 <form  action="" method="post">
                                
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                 </form>
                              </div>
                           </td>
                        </tr>
                           @endif
                        @endforeach
                         @endforeach
                          @endforeach
                     </tbody>
                  </table>
               </div>




                                    </div>
                                </div>
                               
                            </div>
                        </div>          
												
										

										 
											   
											   
                </div>
               
</div>
  
								
                       
                    
          
                           
                      
                       
                                           
                                         
                                       
                        

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="{{('assets/scripts/main.87c0748b313a1dda75f5.js')}}"></script></body>


@endsection
