<? include "header.php" ?>
<!--  about us content-->
<div class="container margintop40">
    <!--starting of product grid -->
    <div class="row marginbottom40" >
        <!--starting of product main row -->
        <div class="col-sm-3 sidemenu" >
            <!--starting of heading -->
            <div id="sidebar" >
                <div class="card marginbottom40" >
                    <div>
                        <div class="headingContent padding10 ">
                            <h4>Explore </h4>
                        </div>
                        <ul class="paddingtop10 paddingbottom10 " id="product-categories">
                        </ul>
                    </div>
                </div>
                <div class="card priceRangeCheckbox  marginbottom40" >
                    <div class="headingContent padding10">
                        <h4>Price Range</h4>
                    </div>
                    <div class="padding20">
                        <div id="slider-container"></div>
                        <br>
                        <p>
                            <label for="amount">Price range:</label>
                            <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--end of heading -->
        <div class="col-sm-9">
            <!--starting of product col -->
            <section class="preference-filter" >
                <div class="col-sm-12 marginbottom40 paddingbottom40 paddingtop20" style="background-color: #ccc !important; ">
                    <div class="col-sm-12">
                        <h3 class="text-center">Which Nameplate is suitable for your House ?</h3>
                    </div>
                    <div class="col-sm-12 margintop10">
                        <div class="col-sm-3">
                            <div class="dropdown">
                                <button class="btn btn-default btn-block dropdown-toggle" type="button" id="use-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nameplate Use
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="use-dropdown">
                                    <li><a href="#">Indoor</a></li>
                                    <li><a href="#">Outdoor</a></li>
                                    <li><a href="#">Indoor/Outdoor</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="dropdown">
                                <button class="btn btn-default btn-block dropdown-toggle" type="button" id="place-dropdown" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                Fitting place
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="place-dropdown">
                                    <li><a href="#">Door</a></li>
                                    <li><a href="#">Wall</a></li>
                                    <li><a href="#">Door/Wall</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="dropdown">
                                <button class="btn btn-default btn-block dropdown-toggle" type="button" id="material-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nameplate Material
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" id="materials-go-here" aria-labelledby="material-dropdown">
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-info btn-block" id="filter-choosed" type="button">
                            Check
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row  products-go-here" id="MixItUp">
                <!--starting of product row 1 -->
            </div>
            <!--ending of product row 1 -->
            <div class="col-sm-12 more text-center">
                <a href="#">
                <button type="button" class="btn btn-info text-center ">Load More</button>
                </a>
            </div>
        </div>
        <!--ending of product col -->
    </div>
    <!--ending of product main row -->
</div>
<!--ending of product grid -->
<!--Product  model start --> 
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                    <div class="col-sm-5 " >
                        <div class="proImage productBorder  padding20" >
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="" /></div>
                                <div class="tab-pane" id="pic-2"><img src="" /></div>
                                <div class="tab-pane" id="pic-3"><img src="" /></div>
                                <div class="tab-pane" id="pic-4"><img src="" /></div>
                                <div class="tab-pane" id="pic-5"><img src="" /></div>
                            </div>
                        </div>
                        <div class="row">
                            <ul class="preview-thumbnail nav nav-tabs productBorder ">
                                <li class="active productBorder "><a data-target="#pic-1" data-toggle="tab"><img src="" /></a></li>
                                <li class="productBorder"><a data-target="#pic-2" data-toggle="tab"><img src="" /></a></li>
                                <li class="productBorder"><a data-target="#pic-3" data-toggle="tab"><img src="" /></a></li>
                                <li class="productBorder"><a data-target="#pic-4" data-toggle="tab"><img src="" /></a></li>
                                <li class="productBorder"><a data-target="#pic-4" data-toggle="tab"><img src="" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 proComtent">
                        <span class="proHead product-name"></span><br/>
                        <h3 class="product-price"> </h3>
                        <br>
                        <div class="clearfix"></div>
                        <a href="#" class="btn btn-info customize change-button should-hidden"><i style="color:#ffffff;" class="fa fa-pencil-square-o" aria-hidden="true"></i> Customize</a>
                        <a type="button" class="btn btn-info text-center should-change-text should-visible">Add to Cart</a>
                        <a href="#" class="btn btn-primary" ><i class="fa fa-heart" aria-hidden="true"></i></a>
                        <br />
                        <br />
                        
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="col-sm-2 black ">In Stock:</td>
                                    <td class="col-sm-2 ">Yes</td>
                                    <td class="col-sm-2 black">Material</td>
                                    <td class="col-sm-2 product-material"></td>
                                </tr>
                                <tr>
                                    <td class="col-sm-2 black">COD</td>
                                    <td class="col-sm-2 ">No</td>
                                    <td class="col-sm-2 black cc">Letters</td>
                                    <td class="col-sm-2 product-letter-type should-hidden"></td>
                                </tr>
                                <tr>
                                    <td class="col-sm-2 black should-hidden">Fitting Place</td>
                                    <td class="col-sm-2 product-fitting-place should-hidden"></td>
                                    <td class="col-sm-2 black should-hidden">Nameplate Use </td>
                                    <td class="col-sm-2 product-use should-hidden"></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered ">
                            <tbody>
                                <tr>
                                    <td class="col-sm-2 black ">Length</td>
                                    <td class="col-sm-2 product-length"></td>
                                    <td class="col-sm-2 black">Height</td>
                                    <td class="col-sm-2 product-height"></td>
                                    <td class="col-sm-2 black">Weight</td>
                                    <td class="col-sm-2 product-weight"></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="col-md-12">
                                        <div class=" black">Note:</div>
                                       <h5 class="product-notes">
                                        </h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="modal-footer">
            <div class="col-sm-12">
            
            </div>
            </div>-->
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/common.js"></script>
<script src="js/jquery-ui-slider.min.js"></script>
<script src="js/product.js"></script>

<? include "footer.php" ?>