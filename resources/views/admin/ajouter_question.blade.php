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
            <div>Ajouter question  {{$i}}/{{$questions}} </div>
         </div>
      </div>
      <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
         <div class="row">
            <div class="col-md-12">
               <div class="main-card mb-3 card">
                  <div class="card-body">
                     <h5 class="card-title"></h5>
                     <form  action="{{route('question.store')}}" method="POST" enctype="multipart-data">
                        <div class="modal-content">
                           <div class="modal-body">
                              @csrf
                              <input type="hidden" name="question_n"  value="{{$i}}"/>
                              <input type="hidden" name="total_question"  value="{{$questions}}"/>
                              <div class="position-relative form-group col-6">
                                 <label  class="">enonce</label>
                                 <input name="enonce" id="enonce" placeholder="" type="text" class="form-control">
                              </div>
                              <div class="position-relative form-group col-6">
                                 <label  class="">Bareme</label>
                                 <input name="bareme" id="bareme" placeholder="" type="text" class="form-control">
                              </div>
                              <div class="position-relative form-group col-6">
                                 <label  class="">rep1</label>
                                 <input name="rep1" id="rep1" placeholder="" type="text" class="form-control">
                              </div>
                              <div class="position-relative form-group col-6">
                                 <label  class="">rep2</label>
                                 <input name="rep2" id="rep2" placeholder="" type="text" class="form-control">
                              </div>
                              <div class="position-relative form-group col-6">
                                 <label  class="">rep3</label>
                                 <input name="rep3" id="rep3" placeholder="" type="text" class="form-control">
                              </div>
                              <div class="position-relative form-group col-6">
                                 <label  class="">repb</label>
                                 <input name="repb" id="repb" placeholder="" type="text" class="form-control">
                              </div>
                              <div class="position-relative form-group col-6">
                                 <label  class="">id_examen</label>
                                 <input name="id_examen" id="id_examen" placeholder="" type="text" value=" {{ $examen }}" class="form-control">
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
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="{{('assets/scripts/main.87c0748b313a1dda75f5.js')}}"></script></body>
@endsection