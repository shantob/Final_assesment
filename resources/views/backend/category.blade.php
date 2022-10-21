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


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark">List Category</label>
                                    <table class="table table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">List Category</th>
                                                <th colspan="3" scope="col">Action</th>
   
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td><a href="categoryshow.html"><button type="submit" class="btn btn-info w-100">Wiew</button></a></td>
                                                <td><a href="categoryedit.html"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td><a href="categoryshow.html"><button type="submit" class="btn btn-info w-100">Wiew</button></a></td>
                                                <td><a href="categoryedit.html"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td><a href="categoryshow.html"><button type="submit" class="btn btn-info w-100">Wiew</button></a></td>
                                                <td><a href="categoryedit.html"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    @endsection