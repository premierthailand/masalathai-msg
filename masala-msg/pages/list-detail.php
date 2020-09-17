<?php $activeList = 'active';?>
<?php $pageName = 'Delivery list'; ?>

<?php include 'header.php';?>
<div class="content">
        <div class="container-fluid">
        <!-- <button type="btn" class="btn btn-success">+ Add</button> -->
            <div class="card col-md-12" style="padding:15px">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Location -->
                        <div class="form-group">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:1px solid #d2d2d2">
                                    Select Location
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdown_user">
                                    <form class="px-4 py-2">
                                        <input type="search" class="form-control search" placeholder="Select Location.." autofocus="autofocus">
                                    </form>
                                    <div class="menuItems">
                                        <input type="button" class="dropdown-item" type="button" value="Asok" />
                                        <input type="button" class="dropdown-item" type="button" value="Bang na" />
                                        <input type="button" class="dropdown-item" type="button" value="Nana" />
                                        <input type="button" class="dropdown-item" type="button" value="Siam" />
                                    </div>
                                    <div style="display:none;" class="dropdown-header dropdown_empty">
                                        No entry found
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Messenger   -->
                        <div class="form-group">
                            <select class="form-control" id="exampleSelect1">
                                <option>=== Select Messenger ===</option>
                                <option>Messenger A</option>
                                <option>Messenger B</option>
                                <option>Messenger C</option>
                            </select>
                        </div>
                        <br/>
                        <!-- DatePicker -->
                        <div class="form-group">
                            <label class="label-control">Datetime Picker</label>
                            <input type="text" class="form-control datetimepicker" value=""/>
                        </div>
                        <br/>
                        <!-- Status -->
                        <div class="form-group">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    Delivered
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" >
                                    Pending
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
                                    Cancel
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <!-- Upload -->
                        <div class="form-group">
                            <label for="myfile" type="btn" class="btn btn-info">Upload Image</label>
                            <input  id="myfile" class="btn btn-primary" type="file" value="test">
                        </div>
                        <!-- Comment -->
                        <div class="form-group">
                            <label for="inputComment" class="bmd-label-floating">Comment</label>
                            <textarea type="text" class="form-control" id="inputComment" rows="3"></textarea>
                        </div>
                        <!-- Save -->
                        <div class="form-group">
                            <a href="./list.php">
                                <button type="btn" class="btn btn-primary">Save</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="col-lg-6 col-md-6">
                

                        
                        

                        


                    </div>
                </div>
            </div>


            </div>
        </div>
</div>
      
<?php include 'footer.php';?>
