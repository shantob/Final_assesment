@extends('backend')
@section('content')

<div class=" my-container active-cont ">
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-12">

            <div class="main-content ">
                <div class="mt-5 w-100 text-center p-3">
                    <div class="card ">
                        <div class="card-body">
        
                            <form class="form-horizontal">
                                <fieldset>
        
                                    <!-- Form Name -->
                                    <legend>PRODUCT EDIT</legend>
        
                                    <!-- Text input-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="product_id" name="product_id" placeholder="PRODUCT ID"
                                                        class="form-control w-100 text-center" required="" type="text" value="0052">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <!-- Text input-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="product_name" name="product_name" placeholder="PRODUCT NAME"
                                                        class="form-control input-md" required="" type="text" value="Snikers">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <!-- Text input-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION
                                                    FR</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="product_name_fr" name="product_name_fr"
                                                        placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md"
                                                        required="" type="text" value="lhiuwhfi iuhweiuhfw jkhiuwhf hiuwh hiuhwifu">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <!-- Select Basic -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Category</option>
                                                    <option value="1">w90rj</option>
                                                    <option value="2">vettr</option>
                                                    <option value="3">eger</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
        
                                    <!-- Text input-->

        
                                    <!-- Text input-->


                                    <!-- Textarea -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION
                                                    FR</label>
                                                    <div class="col-md-12 p-4">
                                                    <textarea class="form-control" id="product_name_fr"
                                                        name="product_name_fr"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <!-- Text input-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="percentage_discount">PERCENTAGE
                                                    DISCOUNT</label>
                                                    <div class="col-md-12 p-4">
                                                    <input id="percentage_discount" name="percentage_discount"
                                                        placeholder="PERCENTAGE DISCOUNT" class="form-control input-md"
                                                        required="" type="text" value="5%">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        


        
                                    <!-- Search input-->


        
                                    <!-- Text input-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="online_date">ONLINE DATE</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="online_date" name="online_date" placeholder="ONLINE DATE"
                                                        class="form-control input-md" required="" type="date">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        


                                    <!-- Text input-->
                                    <div class="card aligns-items-center justify-content-center card text-center w-100">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="approuved_by">APPROUVED BY</label>
                                                <div class="col-md-12 p-4">
                                                    <input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY"
                                                        class="form-control input-md" required="" type="text" value="Shanto Bepary -Admin">
        
                                                    <!-- File Button -->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                    for="filebutton">main_image</label>
                                                                    <div class="col-md-12 p-4">
                                                                    <input id="filebutton" name="filebutton" class="input-file"
                                                                        type="file">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- File Button -->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                    for="filebutton">auxiliary_images</label>
                                                                    <div class="col-md-12 p-4">
                                                                    <input id="filebutton" name="filebutton" class="input-file"
                                                                        type="file">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <!-- Button -->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label " for="singlebutton">Single
                                                            Button</label>
                                                        <div class="col-md-12 p-4 d-flex justify-content-center">
                                                            <button id="singlebutton" name="singlebutton"
                                                                class="btn btn-primary text-center px-5 m-2">Button</button>
                                                            <button id="singlebutton" name="singlebutton"
                                                                class="btn btn-danger text-center px-5 m-2">Cancle</button>
                                                        </div>
                                                    </div>
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
        
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    @endsection