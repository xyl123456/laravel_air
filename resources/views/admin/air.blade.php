@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#31708f">{{$scene_name}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            @foreach($air_datas as $airdata)
            @if($airdata->dev_cate=='1')
            <div class="col-lg-3 col-md-6">
                <div class="panel @if($airdata->dev_value<480)panel-green
                @else panel-red @endif">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-leaf fa-2x"></i>
                                <div class="mhuge">CO2</div>
                                <div>{{$airdata->dev_alias}}</div>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$airdata->dev_value}}</div>
                                <div class="mhuge">ppm</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @if($airdata->dev_cate=='2')
                    <div class="col-lg-3 col-md-6">
                        <div class="panel @if($airdata->dev_value<30)panel-green @else panel-red @endif">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-sun-o fa-2x"></i>
                                        <div class="mhuge">TEMP</div>
                                        <div>{{$airdata->dev_alias}}</div>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$airdata->dev_value}}</div>
                                        <div class="mhuge">℃</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @if($airdata->dev_cate=='3')
                    <div class="col-lg-3 col-md-6">
                        <div class="panel @if($airdata->dev_value<300)panel-green @else panel-red @endif">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-pagelines fa-2x"></i>
                                        <div class="mhuge">PM2.5</div>
                                        <div>{{$airdata->dev_alias}}</div>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$airdata->dev_value}}</div>
                                        <div class="mhuge">mg/m³</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @if($airdata->dev_cate=='4')
                    <div class="col-lg-3 col-md-6">
                        <div class="panel @if($airdata->dev_value<30)panel-green @else panel-red @endif">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-soundcloud fa-2x"></i>
                                        <div class="mhuge">TVOC</div>
                                        <div>{{$airdata->dev_alias}}</div>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$airdata->dev_value}}</div>
                                        <div class="mhuge">mg/m³</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @if($airdata->dev_cate=='5')
                    <div class="col-lg-3 col-md-6">
                        <div class="panel @if($airdata->dev_value<50)panel-green @else panel-red @endif">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tint fa-2x"></i>
                                        <div class="mhuge">HUM</div>
                                        <div>{{$airdata->dev_alias}}</div>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$airdata->dev_value}}</div>
                                        <div class="mhuge">RH%</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection