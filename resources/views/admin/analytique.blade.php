@extends('admin.layouts.master')
@section('content')
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div> <h2>Acceuil </h2>
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    
                                   
                                </div>
                            </div>    </div>
                    </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        
                    </ul>
                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-xl-4">
                                <div class="card mb-3 widget-chart">
                                    <div class="widget-chart-content">
                                        <div class="icon-wrapper rounded">
                                            <div class="icon-wrapper-bg bg-warning"></div>
                                            <i class="lnr-laptop-phone text-warning"></i></div>
                                        <div class="widget-numbers">
                                            <span>3M</span>
                                        </div>
                                        <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">Examen</div>
                                       
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparklines-simple-1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-4">
                                <div class="card mb-3 widget-chart">
                                    <div class="widget-chart-content">
                                        <div class="icon-wrapper rounded">
                                            <div class="icon-wrapper-bg bg-danger"></div>
                                            <i class="lnr-graduation-hat text-danger"></i>
                                        </div>
                                        <div class="widget-numbers"><span>1M</span></div>
                                        <div class="widget-subheading fsize-1 pt-2 opacity-10 text-danger font-weight-bold">
                                            Entreprises
                                        </div>
                                       
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparklines-simple-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-4">
                                <div class="card mb-3 widget-chart">
                                    <div class="widget-chart-content">
                                        <div class="icon-wrapper rounded">
                                            <div class="icon-wrapper-bg bg-info"></div>
                                            <i class="lnr-diamond text-info"></i></div>
                                        <div class="widget-numbers text-danger"><span>294</span></div>
                                        <div class="widget-subheading fsize-1 pt-2 opacity-10 text-info font-weight-bold">Candidat</div>
                                        
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparklines-simple-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mbg-3">
                            <button class="btn-wide btn-pill btn-shadow fsize-1 btn btn-focus btn-lg">
                                    <span class="mr-2 opacity-7">
                                        <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                    </span>
                            plus ....
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5 col-xl-4">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header">
                                        <div>EXEMPLE DE CALENDRIER</div>
                                        <div class="btn-actions-pane-right actions-icon-btn">
                                            <div class="btn-group dropdown">
                                                <button data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                        <span class="btn-icon-wrapper">
                                                            <i class="icon ion-android-apps"></i>
                                                        </span>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="p-3 text-right">
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-lg">
                                        <div class="scrollbar-container">
                                            <div class="p-4">
                                                <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div id="" class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus">
                                            <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
                                            voir tous 
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7 col-xl-8">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div>liste des offre</div>
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="btn-shadow  btn btn-dark">Modifier</button>
                                                <button type="button" class="btn-shadow  btn btn-dark">Supprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table style="width: 100%;" id="example2" class="table table-hover table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Durée</th>
                                                <th>Prix</th>
                                                <th>Nombre des questions</th>
                                                <th>Nombre des candidats</th>
                                                <th>Résultat</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
											 <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                          <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                          <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                          <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                          <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr> <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr> <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                         
                                         
                                         
                                            
                                            
										
                                           
                                           
										   
                                            </tbody>
                                            <tfoot>
                                           
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header">Commentaires </div>
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-2">
                                                <div class="chat-wrapper p-1">
                                                    <div class="chat-box-wrapper">
                                                        <div>
                                                            <div class="avatar-icon-wrapper mr-1">
                                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                                    <img src="assets/images/avatars/2.jpg" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="chat-box">EvalNet c'est le meilleur</div>
                                                            <small class="opacity-6">
                                                                <i class="fa fa-calendar-alt mr-1"></i>
                                                               
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                                            <div>
                                                                <div class="chat-box">  EvalNet est le plus adaptable et facile </div>
                                                                <small class="opacity-6">
                                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                                   
                                                                </small>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-icon-wrapper ml-1">
                                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                                        <img src="assets/images/avatars/3.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-box-wrapper">
                                                        <div>
                                                            <div class="avatar-icon-wrapper mr-1">
                                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                                    <img src="assets/images/avatars/2.jpg" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="chat-box">Le plus rapide plateforme .</div>
                                                            <small class="opacity-6">
                                                                <i class="fa fa-calendar-alt mr-1"></i>
                                                            
                                                            </small>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="float-right">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input placeholder="ecrire un commentaire..." type="text" class="form-control-sm form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header">Liste des taches</div>
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-2">
                                                <ul class="todo-list-wrapper list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-warning"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                        for="exampleCustomCheckbox12">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">vérification des dates
                                                                        <div class="badge badge-danger ml-2"></div>
                                                                    </div>
                                                                    <div class="widget-subheading"><i></i></div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-focus"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                       for="exampleCustomCheckbox1">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Mise a jour</div>
                                                                    <div class="widget-subheading">
                                                                        <div>
                                                                            <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <div class="d-inline-block dropdown">
                                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                                            <i class="fa fa-ellipsis-h"></i>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                            <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-primary"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                       for="exampleCustomCheckbox4">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading"></div>
                                                                    <div class="widget-subheading"></div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="widget-content-right ml-3">
                                                                    <div class="badge badge-pill badge-success"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-info"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                       for="exampleCustomCheckbox2">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left mr-3">
                                                                    <div class="widget-content-left">
                                                                        <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading"></div>
                                                                    <div class="widget-subheading"></div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-success"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                       for="exampleCustomCheckbox3">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading">Developement tache</div>
                                                                    <div class="widget-subheading"></div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="badge badge-warning mr-2"></div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-warning"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                        for="exampleCustomCheckbox12">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">
                                                                        <div class="badge badge-danger ml-2"></div>
                                                                    </div>
                                                                    <div class="widget-subheading"><i></i></div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-focus"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                       for="exampleCustomCheckbox1">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading"></div>
                                                                    <div class="widget-subheading">
                                                                        <div>
                                                                            <div class="badge badge-pill badge-info ml-2"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <div class="d-inline-block dropdown">
                                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                                            <i class="fa fa-ellipsis-h"></i>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                            <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-primary"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                       for="exampleCustomCheckbox4">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading"></div>
                                                                    <div class="widget-subheading"></div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="widget-content-right ml-3">
                                                                    <div class="badge badge-pill badge-success"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-info"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                       for="exampleCustomCheckbox2">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left mr-3">
                                                                    <div class="widget-content-left">
                                                                        <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading"></div>
                                                                    <div class="widget-subheading"></div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-success"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                                       for="exampleCustomCheckbox3">&nbsp;</label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading"></div>
                                                                    <div class="widget-subheading"></div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="badge badge-warning mr-2"></div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-block text-right card-footer">
                                        <button class="mr-2 btn btn-link btn-sm">Annuler</button>
                                        <button class="btn btn-primary">Ajouter une tâche</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                            <div class="card">
                                <div class="no-gutters row">
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <div class="pt-0 pb-0 card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Examens</div>
                                                                    
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-primary">1896</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                                                                </div>
                                                                <div class="progress-sub-label">
                                                                    
                                                                    <div class="sub-label-right">100%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <div class="pt-0 pb-0 card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">candidats</div>
                                                                    
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-success">455</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                                                                </div>
                                                                <div class="progress-sub-label">

                                                                    <div class="sub-label-right">100%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <div class="pt-0 pb-0 card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Clients</div>
                                                                    
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-danger">
                                                                        
                                                                        527
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                                                                </div>
                                                                <div class="progress-sub-label">
                                                                    
                                                                    <div class="sub-label-right">100%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <div class="footer-dots">
                                    <div class="dropdown">
                                        <a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dot-btn-wrapper">
                                            <i class="dot-btn-icon lnr-bullhorn icon-gradient bg-mean-fruit"></i>
                                           
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                           
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-messages-header1" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="notifications-box">
                                                                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Something not important
                                                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/1.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/3.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/4.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/5.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/9.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/7.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/8.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                <div class="avatar-icon"><i>+</i></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                       
                                                                       
                                                                       
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-events-header1" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        
                                                                   
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-errors-header1" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="no-results pt-3 pb-0">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                </div>
                                                                <div class="results-subtitle">All caught up!</div>
                                                                <div class="results-title">There are no system errors!</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                         
                                    </li>
                                    <li 
    </div>
</div>
<div c<div class="app-drawer-wrapper">
    <div class="drawer-nav-btn">
        <button type="button" class="hamburger hamburger--elastic is-active">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
    </div>
    <div class="drawer-content-wrapper">
        <div class="scrollbar-container">
            <h3 class="drawer-heading">Statistique</h3>
            <div class="drawer-section">
                <div class="row">
                    <div class="col">
                        <div class="progress-box"><h4>tests</h4>
                            <div class="circle-progress circle-progress-gradient-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>candidat</h4>
                            <div class="circle-progress circle-progress-success-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>entreprise</h4>
                            <div class="circle-progress circle-progress-danger-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="mt-3"><h5 class="text-center card-title"> Statistiques</h5>
                    <div id="sparkline-carousel-3"></div>
                    <div class="row">
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-warning fsize-3">43</div>
                                    <div class="widget-subheading pt-1">entreprises</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-danger fsize-3">150</div>
                                    <div class="widget-subheading pt-1">examens</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-success fsize-3">50</div>
                                    <div class="widget-subheading pt-1">candidats</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                   
                </div>
            </div>
           
            
                                </div>
                            </div>
                        </li>
                       
                       
                    </ul>
                </div>
            </div>
            
            
            
          
                           
                     
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript"  src="{{('assets/scripts/main.87c0748b313a1dda75f5.js')}}"></script></body>
@endsection