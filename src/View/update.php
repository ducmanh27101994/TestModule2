<!--<form method="post">-->
<!--    <input type="text" name="name" value="--><?php //echo $product['name']?><!--"><br>-->
<!--    <select name="category">-->
<!--        <option value="Phone">Phone</option>-->
<!--        <option value="Tivi">Tivi</option>-->
<!--    </select>-->
<!--    <input type="text" name="price" value="--><?php //echo $product['price']?><!--"><br>-->
<!--    <input type="text" name="number" value="--><?php //echo $product['number']?><!--"><br>-->
<!--    <input type="text" name="date" value="--><?php //echo $product['date']?><!--"><br>-->
<!--    <input type="text" name="description" value="--><?php //echo $product['description']?><!--"><br>-->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->

<div class="container">
    <h3 id="book-h3">Update</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Name:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['name']?>" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="sel1">Category list:</label>
            <select name="category" class="form-control" id="sel1">
                <option value="Phone">Phone</option>
                <option value="Tivi">Tivi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="uname">Price:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['price']?>" name="price" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Number:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['number']?>" name="number" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Number:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['date']?>" name="date" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Desc:</label>
            <textarea type="text" class="form-control" id="uname" name="description" required><?php echo $product['description']?></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <button id="add-all" type="submit" class="btn btn-primary">Update</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>