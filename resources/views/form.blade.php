@extends('layout.main')

@section('title', 'FORM')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Form</h5>
                </div>
                <div class="card-body">
                    <form id="validation-form123" action="#!">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="validation-email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="validation-password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Confirm password</label>
                                    <input type="password" class="form-control" name="validation-password-confirmation" placeholder="Confirm password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Required</label>
                                    <input type="text" class="form-control" name="validation-required" placeholder="Required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">URL</label>
                                    <input type="text" class="form-control" name="validation-url" placeholder="Url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="validation-date" placeholder="Url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="validation-phone" placeholder="Phone: (999) 999-9999">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Select</label>
                                    <select class="js-example-basic-single form-control">
                                        <optgroup label="Developer">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Designer">
                                            <option value="WY">Peter</option>
                                            <option value="WY">Hanry Die</option>
                                            <option value="WY">John Doe</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Text</label>
                                    <textarea class="form-control" name="validation-text"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">File</label>
                                    <div>
                                        <input type="file" class="validation-file form-control" name="validation-file" onchange="preview_image(event)" accept="image/*">
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <img src="" style="width:450px;" id="output_image"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="switch d-inline m-r-10">
                                        <input type="checkbox" class="switcher-input" name="validation-switcher" id="switch-1">
                                        <label for="switch-1" class="cr"></label>
                                    </div>
                                    <label>Check me</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn  btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function preview_image(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
