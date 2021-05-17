<?php 
   $title= 'Home';
   require 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Product details</h4>
            <form method="POST">
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" autofocus value="<?= $name ?>">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="" value="<?= $price ?>">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="stock">Stock:</label>
                        <input type="number" id="stock" name="stock" class="form-control" placeholder="" value="<?= $stock ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="category">Category</label>
                        <select class="custom-select d-block w-100" id="category" name="category">
                            <option value="">Choose a Category</option>
                            <option value="1" <?php if($category === '1'){echo 'selected';}?>>Smartphones</option>
                            <option value="2" <?php if($category === '2'){echo 'selected';}?>>Consoles</option>
                            <option value="3" <?php if($category === '3'){echo 'selected';}?>>Washing Machine</option>
                            <option value="4" <?php if($category === '4'){echo 'selected';}?>>TV</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="brand">Brand</label>
                        <select class="custom-select d-block w-100" id="brand" name="brand">
                            <option value="">Choose a Brand</option>
                            <option value="1" <?php if($brand === '1'){echo 'selected';}?>>LG</option>
                            <option value="2" <?php if($brand === '2'){echo 'selected';}?>>Apple</option>
                            <option value="3" <?php if($brand === '3'){echo 'selected';}?>>Sony</option>
                            <option value="4" <?php if($brand === '4'){echo 'selected';}?>>Phillips</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr class="mb-4">
                        <div class="col-md-12 mb-3">
                            <h4>Warranty</h4>
                            <div class="custom-control custom-radio">
                                <input id="6month" name="guarantee" value="6" <?php if($warranty === '6'){echo 'checked';}?> type="radio" class="custom-control-input">
                                <label class="custom-control-label" for="6month">6 Month</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="12month" name="guarantee" value="12" <?php if($warranty === '12'){echo 'checked';}?> type="radio" class="custom-control-input">
                                <label class="custom-control-label" for="12month">12 Month</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="24month" name="guarantee" value="24" <?php if($warranty === '24'){echo 'checked';}?> type="radio" class="custom-control-input">
                                <label class="custom-control-label" for="24month">24 Month</label>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipping" name="shipping" value="1" <?php if($shipping === '1' ) echo 'checked' ?>>
                                <label class="custom-control-label" for="shipping">Free Shipping</label>
                            </div>
                            <hr class="mb-4">
                            <div class="col-la-12">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" name="description" id="description" rows="3"><?= $description ?></textarea>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <input type="submit" class="btn btn-success" value="Add product">
                            <input type="reset" class="btn btn-secondary" value="Reset">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
   require 'footer.php';
