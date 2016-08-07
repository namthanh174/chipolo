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
            <a href="#">New</a>
        </li>
    </ul>

    <div class="page-header">
        <h2>
            Adding <?php echo ucfirst($this->uri->segment(2)); ?>
        </h2>
    </div>

    <?php
    //flash messages
    if (isset($flash_message)) {
        if ($flash_message == TRUE) {
            echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> new product created with success.';
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

    echo form_open('admin/products/add', $attributes);
    ?>
    <fieldset>
        <div class="control-group">
            <label for="inputError" class="control-label">Title</label>
            <div class="controls">
                <input type="text" id="" name="title" value="<?php echo set_value('title'); ?>" >
            </div>
        </div>     
        <div class="control-group">
            <label for="inputError" class="control-label">Sub-title</label>
            <div class="controls">
                <input type="text" id="" name="sub_title" value="<?php echo set_value('sub_title'); ?>" >
            </div>
        </div>     
        <div class="control-group">
            <label for="inputError" class="control-label">Description</label>
            <div class="controls">
                <input type="text" id="" name="description" value="<?php echo set_value('description'); ?>" >
            </div>
        </div>     
        <div class="control-group">
            <label for="inputError" class="control-label">Sell Price</label>
            <div class="controls">
                <input type="text" name="price" value="<?php echo set_value('price'); ?>">
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Special Price</label>
            <div class="controls">
                <input type="text" id="" name="special_price" value="<?php echo set_value('special_price'); ?>">
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Quantity</label>
            <div class="controls">
                <input type="text" id="" name="quantity" value="<?php echo set_value('quantity'); ?>">
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
