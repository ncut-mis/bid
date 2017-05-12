@extends('admin.layouts.master')

@section('title', '報表資訊')

@section('content')
<!-- Page Heading -->
<!--<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            報表資訊 <small>所有報表資訊</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 報表資訊
            </li>
        </ol>
    </div>
</div>-->

<body>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                     <div class="col-lg-12">
                         <h1 class="page-header">
                             報表資訊 <small>所有報表資訊</small>
                         </h1>
                                <ol class="breadcrumb">
                                     <li class="active">
                                        <i class="fa fa-edit"></i> 報表資訊
                                     </li>
                                </ol>
                    </div>
            </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ route('admin.report.report') }}" class="btn btn-success">哪類商品投注數量最高</a>
                        <a href="{{ route('admin.report.index') }}" class="btn btn-success">月冠軍銷售商品</a>
                        <a href="{{ route('admin.report.index') }}" class="btn btn-success">哪類商品最賺錢</a>
                    </div>
                </div>
                <hr>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <h2><font><font>表格</font></font></h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th><font>商品</font></th>
                                        <th><font><font>類別</font></font></th>
                                        <th><font><font>季節</font></font></th>
                                        <th><font><font>月份</font></font></th>
                                        <th><font><font>數量</font></font></th>
                                        <th><font><font>金額</font></font></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><font><font>/index.html</font></font></td>
                                        <td><font><font>1265</font></font></td>
                                        <td><font><font>32.3％</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font><font>/about.html</font></font></td>
                                        <td><font><font>261</font></font></td>
                                        <td><font><font>33.3％</font></font></td>
                                        <td><font><font>$ 234.12</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font><font>/sales.html</font></font></td>
                                        <td><font><font>665</font></font></td>
                                        <td><font><font>21.3％</font></font></td>
                                        <td><font><font>$ 16.34</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font><font>/blog.html</font></font></td>
                                        <td><font><font>9516</font></font></td>
                                        <td><font><font>89.3％</font></font></td>
                                        <td><font><font>$ 1644.43</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font><font>找到/404.html</font></font></td>
                                        <td><font><font>23</font></font></td>
                                        <td><font><font>34.3％</font></font></td>
                                        <td><font><font>$ 23.52</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font><font>/services.html</font></font></td>
                                        <td><font><font>421</font></font></td>
                                        <td><font><font>60.3％</font></font></td>
                                        <td><font><font>$ 724.32</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>

                                    </tr>
                                    <tr>
                                        <td><font><font>/blog/post.html</font></font></td>
                                        <td><font><font>1233</font></font></td>
                                        <td><font><font>93.2％</font></font></td>
                                        <td><font><font>$ 126.34</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                        <td><font><font>$ 321.33</font></font></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> 圓餅圖</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-pie-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 491px; height: 400px;" width="491" height="400"></canvas>
                                    <canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 491px; height: 400px;" width="491" height="400"></canvas><div class="legend"><div style="position: absolute; width: 59px; height: 68px; top: 5px; right: 5px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:#545454">
                                    <tbody>
                                    <tr>
                                    <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(237,194,64);overflow:hidden"></div></div></td>
                                    <td class="legendLabel">Series 0</td>
                                    </tr>
                                    <tr>
                                    <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(175,216,248);overflow:hidden"></div></div></td>
                                    <td class="legendLabel">Series 1</td>
                                    </tr>
                                    <tr>
                                    <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(203,75,75);overflow:hidden"></div></div></td>
                                    <td class="legendLabel">Series 2</td>
                                    </tr>
                                    <tr>
                                    <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(77,167,77);overflow:hidden"></div></div></td><td class="legendLabel">Series 3</td>
                                    </tr>
                                    <tr>
                                    <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(25,25,25);overflow:hidden"></div></div></td><td class="legendLabel">Series 4</td>
                                    </tr>
                                    <tr>
                                    <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(230,230,230);overflow:hidden"></div></div></td><td class="legendLabel">Series 5</td>
                                    </tr>
                                    </tbody></table></div></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> 長條圖</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="400" version="1.1" width="491" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.3125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with RaphaÃ«l 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="43.5" y="283.985167404" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000792403999981">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,283.985167404H466" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="43.5" y="219.23887555299999" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.0045005529999855">500</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,219.23887555299999H466" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="43.5" y="154.492583702" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.00820870199999">1,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,154.492583702H466" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="43.5" y="89.74629185100002" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.011916851000024">1,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,89.74629185100002H466" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="43.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,25H466" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="431.8333333333333" y="296.485167404" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-112.0304,321.0917)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000792403999981">iPhone 5</tspan></text><text x="363.5" y="296.485167404" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-127.6641,284.1946)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000792403999981">iPhone 4S</tspan></text><text x="295.16666666666663" y="296.485167404" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-136.7473,242.7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000792403999981">iPhone 4</tspan></text><text x="226.83333333333334" y="296.485167404" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-156.0671,208.3839)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000792403999981">iPhone 3GS</tspan></text><text x="158.5" y="296.485167404" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-165.1475,166.8982)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000792403999981">iPhone 3G</tspan></text><text x="90.16666666666666" y="296.485167404" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-169.7253,122.2489)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000792403999981">iPhone</tspan></text><rect x="64.54166666666666" y="266.374176020528" width="51.25" height="17.61099138347197" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="132.875" y="266.244683436826" width="51.25" height="17.740483967173986" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="201.20833333333331" y="248.37470688595" width="51.25" height="35.61046051804999" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="269.5416666666667" y="234.77798559724" width="51.25" height="49.20718180675999" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="337.875" y="199.16752507919" width="51.25" height="84.81764232480998" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="406.2083333333333" y="80.55231840815802" width="51.25" height="203.43284899584197" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>




<div id="flotTip" style="display: none; position: absolute; background: rgb(255, 255, 255); z-index: 100; padding: 0.4em 0.6em; border-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap; left: 668px; top: 1045px;"></div></body>

@endsection
