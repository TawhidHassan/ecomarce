 <?php
    $all_published_slider =DB::table('slider_tbl')
                                ->where('slider_public_statas', 1)
                                ->get();
                                ?>
 <section id="slider"><!--slider-->
    <div class="container">
      <div class="row"> 
         <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $all_published_slider as $v_slider )
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach( $all_published_slider as $v_slider )
                        <div class="item {{ $loop->first ? ' active' : '' }}" >
                            <div class="col-sm-6">
                            <h1><span>E</span>-SHOPPER</h1>
                            <h2>{{$v_slider->slider_titel}}</h2>
                            <p>{{$v_slider->slider_fulldetails}}} </p>
                            <button type="button" class="btn btn-default get">Get it now</button>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{URL::to($v_slider->slider_image)}}" class="girl img-responsive" alt="" style="height: 100%;width: 100%;" />
                            <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />
                        </div>
                        </div>
                    @endforeach
                </div>

                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

         </div>
     </div>
 </section>