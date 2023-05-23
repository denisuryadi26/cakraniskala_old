<!-- Modal -->
<div class="modal fade text-left" id="accessModal" tabindex="-1" role="dialog" aria-labelledby="accessModal">
    <div class="modal-dialog modal-xl" role="document" style="max-width: 75% !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="table-responsive py-4">
                                <table class="table table-flush table-hover" id="accessTable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="3%" class="text-center">No</th>
                                            <th>Name</th>
                                            <th>Parent</th>
                                            <th>Code</th>
                                            <th>View</th>
                                            <th>Add</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{$menu['breadcrumbs']->name}} Table</h4>

                                <table id="accessTable" class="table table-bordered dt-responsive nowrap table-hover table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th width="3%" class="text-center">No</th>
                                            <th>Name</th>
                                            <th>Parent</th>
                                            <th>Code</th>
                                            <th>View</th>
                                            <th>Add</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>