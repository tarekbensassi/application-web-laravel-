@extends ('layout')
@section('content')
<form method=POST  action {{roure('examens.store')}} class="row">
    <div class="position-relative form-group col-6"><label for="exampleEmail" class="">Nom</label><input name="email" id="exampleEmail" placeholder="" type="email" class="form-control"></div>
    <div class="position-relative form-group col-6"><label for="examplePassword" class="">Bareme</label><input name="password" id="examplePassword" placeholder="" type="text"
                                                                                                           class="form-control"></div>
                                                                                                            <div class="position-relative form-group col-6"><label for="examplePassword" class="">Date de création</label><input name="password" id="examplePassword" placeholder="jj/mm/aaaa" type="text"
                                                                                                           class="form-control"></div>
                                                                                                            <div class="position-relative form-group col-6"><label for="examplePassword" class="">Nombre de question</label><input name="password" id="examplePassword" placeholder="" type="text"
                                                                                                           class="form-control"></div>
   
    
   
    <button class="mt-1 btn btn-primary">Envoyer</button>
</form>
</div>
    
@endsection