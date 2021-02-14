@extends('admin.layouts.master')
@section('content')
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-medal icon-gradient bg-tempting-azure">
                                    </i>
                                </div>
  <div>Candidat <div class="page-title-subheading"> </div></div></div> </div>           
                  
                  <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                 <div class="row">

                 <div class="col-md-12">
                 <div class="main-card mb-3 card">
                 <div class="card-body">

                                    <h5 class="card-title"></h5>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form "method="POST" enctype="multipart-data">
    <div class="modal-content">


        <br><br><br>
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
     
  
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
                                                    <th>tel</th>
                                                    <th>Email</th>
                                                  
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                        
                                               
                                                  
                                 
                                    



                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" data-backdrop="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form   method="POST" enctype="multipart-data">
    <div class="modal-content">


        <br><br><br>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Candidat</h5>
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
                        <label  class="">prénom</label>
               <input name="prenom" id="prenom" placeholder="" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group col-6">
                        <label  class="">Adress</label>
                       <input name="adress" id="adress" placeholder="" type="text" class="form-control"  >
                    </div> 
                    <div class="position-relative form-group col-6">
                      <label  class="">tel</label>
                     <input name="adress" id="tel" placeholder="" type="text" class="form-control"  >
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




</script>
</body>

@endsection
