@extends('layouts.front_end')
@section('title', ' | Welcome')

@section('header')
    @parent
@endsection
@section('main_content')
    <div class="image-cover hero_banner" style="background:url(https://via.placeholder.com/1920x980) no-repeat;" data-overlay="0">
        <div class="container">
            
            <h1 class="big-header-capt mb-0">Search Your Next Home</h1>
            <p class="text-center mb-4">Find new & featured property located in your local city.</p>
            <!-- Type -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11 col-md-12">
                    <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                        <div class="search_hero_wrapping">
                    
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>City/Street</label>
                                        <div class="input-with-icon">
                                            <select id="location" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">New York City</option>
                                                <option value="2">Honolulu, Hawaii</option>
                                                <option value="3">California</option>
                                                <option value="4">New Orleans</option>
                                                <option value="5">Washington</option>
                                                <option value="6">Charleston</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Property Type</label>
                                        <div class="input-with-icon">
                                            <select id="ptypes" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">All categories</option>
                                                <option value="2">Apartment</option>
                                                <option value="3">Villas</option>
                                                <option value="4">Commercial</option>
                                                <option value="5">Offices</option>
                                                <option value="6">Garage</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group none">
                                        <label>Price Range</label>
                                        <div class="input-with-icon">
                                            <select id="price" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">From 40,000 To 10m</option>
                                                <option value="2">From 60,000 To 20m</option>
                                                <option value="3">From 70,000 To 30m</option>
                                                <option value="3">From 80,000 To 40m</option>
                                                <option value="3">From 90,000 To 50m</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-1 col-md-2 col-sm-12 small-padd">
                                    <div class="form-group none">
                                        <a href="#" class="btn search-btn"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Our Awards Start ================================== -->
    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-12">
                
                    <div class="_awards_group">	
                        <ul class="_awards_lists">
                            <!-- single list -->
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="assets/img/award-1.png" class="img-fluid" alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="theme-cl">2021</h5>
                                        <span>Annual Awards</span>
                                    </div>
                                </div>
                            </li>
                            <!-- single list -->
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="assets/img/award-5.png" class="img-fluid" alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="theme-cl-2">2018</h5>
                                        <span>Filka Vivo Award</span>
                                    </div>
                                </div>
                            </li>
                            <!-- single list -->
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="assets/img/award-2.png" class="img-fluid" alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="text-warning">2017</h5>
                                        <span>IITCA Green Award</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @parent
@endsection
