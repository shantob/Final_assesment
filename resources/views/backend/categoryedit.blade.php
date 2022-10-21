@extends('backend')
@section('content')

    <!-- Main Wrapper -->
    <div class=" my-container active-cont">
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-10">

            <div class="main-content">


                <div class="col-md-12 text-center d-flex">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning">
                            <div class="card-body ">
                                <label for="caregory" class="my-4">
                                    <h2 class="text-center text-light">Edit Category</h2>
                                </label>
                                <input type="text" name="category" class="form-control" id="category" value="Snikers">
                                <form action="" class="d-flex justify-content-center mt-4 py-4">
                                    <button type="submit" class="btn btn-light mx-2">Updte Category</button>
                                    <button type="reset" class="btn btn-dark mx-2">Cancle</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    @endsection