@include('admin/layoutsAdmin/header')

@include('admin/layoutsAdmin/sidebar')

@include('admin/layoutsAdmin/navbar')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Status</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form
                            action="/updatestatus/{{ $status->id }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="namastatus">Nama status</label>
                                <br/>
                                <input
                                    type="text"
                                    name="status"
                                    class="form-control"
                                    id="statusKerjasama"
                                    placeholder="Nama status"
                                    value="{{ $status->namastatus }}">
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/status" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@include('admin/layoutsAdmin/footer')