<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<div class="container top">

    <ul class="breadcrumb">
        <li>
            <a href="<?php echo site_url("admin"); ?>">
                <?php echo ucfirst($this->uri->segment(1)); ?>
            </a> 
            <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo site_url("admin") . '/' . $this->uri->segment(2); ?>">
                <?php echo ucfirst($this->uri->segment(2)); ?>
            </a> 
            <span class="divider">/</span>
        </li>
        <li class="active">
            <a href="#">Update</a>
        </li>
    </ul>

    <div class="page-header">
        <h2>
            Updating <?php echo ucfirst($this->uri->segment(2)); ?>
        </h2>
    </div>


    <?php
    //flash messages
    if ($this->session->flashdata('flash_message')) {
        if ($this->session->flashdata('flash_message') == 'updated') {
            echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> product updated with success.';
            echo '</div>';
        } else {
            echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
            echo '</div>';
        }
    }
    ?>

    <?php
    //form data
    $attributes = array('class' => 'form-horizontal', 'id' => '');

    //form validation
    echo validation_errors();
    ?>
    <div class="row">
        <div class="col-md-2 pull-left">
            <?php echo form_open('admin/products/update/' . $this->uri->segment(4) . '', $attributes); ?>
            <fieldset>
                <div class="control-group">
                    <label for="inputError" class="control-label">Title</label>
                    <div class="controls">
                        <input type="text" id="" name="title" value="<?php echo $product[0]['title']; ?>" >
                    </div>
                </div>     
                <div class="control-group">
                    <label for="inputError" class="control-label">Sub-title</label>
                    <div class="controls">
                        <input type="text" id="" name="sub_title" value="<?php echo $product[0]['sub_title']; ?>" >
                    </div>
                </div>     
                <div class="control-group">
                    <label for="inputError" class="control-label">Description</label>
                    <div class="controls">
                        <input type="text" id="" name="description" value="<?php echo $product[0]['description']; ?>" >
                    </div>
                </div>     
                <div class="control-group">
                    <label for="inputError" class="control-label">Sell Price</label>
                    <div class="controls">
                        <input type="text" name="price" value="<?php echo $product[0]['price']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputError" class="control-label">Special Price</label>
                    <div class="controls">
                        <input type="text" id="" name="special_price" value="<?php echo $product[0]['special_price']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputError" class="control-label">Quantity</label>
                    <div class="controls">
                        <input type="text" id="" name="quantity" value="<?php echo $product[0]['quantity']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputError" class="control-label">Free shipping</label>
                    <select name="free_shipping" class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Save changes</button>
                    <button class="btn" type="reset">Cancel</button>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
        </div>    
        <div class="col-md-2 pull-right">
            <form id="fileupload" action="/chipolo/admin/products/upload/" method="POST" enctype="multipart/form-data">
                <div class="form-actions">
                    <span>Add files...</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload" type="file" name="files[]" multiple>
                </div>
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>

                <!-- The global progress state -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
                <!-- The container for the uploaded files -->
                <div id="files" class="files"></div>
                <div class="form-actions">
                    <button id="btn-upload" class="btn btn-primary" type="button">Upload</button>
                </div>
            </form>

        </div>

    </div>

</div>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo base_url(); ?>assets/admin/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo base_url(); ?>assets/admin/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.fileupload-validate.js"></script>
<script>
    /*jslint unparam: true, regexp: true */
    /*global window, $ */
    $(function () {
        'use strict';
        var url = '/chipolo/admin/products/upload/';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            autoUpload: true,
            acceptFileTypes: /(\.|\/)(gif|jpeg|png)$/i,
            maxFileSize: 999000,
            previewMaxWidth: 100,
            previewMaxHeight: 100,
            previewCrop: true,
            add: function (e, data) {
                data.context = $('<div/>').appendTo('#files');
                $.each(data.files, function (index, file) {
                    var node = $('<p/>')
                            .append($('<span/>').text(file.name));
                    if (!index) {
                        node.append('<br>');
                    }
                    node.appendTo(data.context);
                });
                
            },
            done: function (e, data) {
                alert('88');
            }
        });
    });

    $('#btn-upload').on('click', function () {
        $.ajax({
            url: "/chipolo/admin/products/upload/",
            type: 'POST',
            dataType: 'json'
        }).done(function (data) {
            console.log(data);
        });
    });


</script>
