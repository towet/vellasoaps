

<!doctype html>
                        <html>
                           <head>

                                <?php include('includes/nav.php'); ?>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - </title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap');

body {
    background-color: #eee;
    font-family: 'Manrope', sans-serif
}

.item {
    border: 1px solid #eee
}

.p-name {
    font-size: 23px
}

.btn-group {
    height: 33px
}

.btn {
    line-height: 15px
}

.ratings i {
    color: red;
    font-size: 20px
}

.price:hover {
    color: #fff !important;
    background-color: #432b65;
    border-color: #432b65 !important
}

.cart:hover {
    color: #fff !important;
    background-color: #432b65;
    border-color: #432b65 !important
}

.p-image img {
    width: 100% !important

}</style>

<style>
    h1 {
        color: black;
    }
     
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        outline: 0;
        background: royalblue;
        background-image: none;
        border: 1px solid black;
    }
     
    .select {
        position: relative;
        display: block;
        width: 20em;
        height: 3em;
        line-height: 3;
        background: #2C3E50;
        overflow: hidden;
        border-radius: .25em;
    }
     
    select {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0 0 0 .5em;
        color: #fff;
        cursor: pointer;
    }
     
    select::-ms-expand {
        display: none;
    }
     
    .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        padding: 0 1em;
        background: #34495E;
        pointer-events: none;
    }
     
    .select:hover::after {
        color: #F39C12;
    }
     
    <!-- For different browsers --> .select::after {
        -webkit-transition: .25s all ease;
        -o-transition: .25s all ease;
        transition: .25s all ease;
    }
    </style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container-fluid mt-5 mb-5">
    <div class="p-2 bg-white px-4 rounded">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="select">
                <form > <select name="select" onChange="window.open(this.options[this.selectedIndex].value,'_blank')"> <option value="./index.php">all type soaps</option> 
                    <option value="./multipurpose.php">multipupose</option>
                     <option value="./handwash.php">hand wash</option>
                     <option value="./dishwash.php">dish wash</option>
                     <option value="./fabric.php">fabric clean</option> </select> </form>

            </div>
            <div class="d-flex flex-row align-items-center filters mt-2">
                <div class="sub-cat" style="border-bottom: 2px solid blue;">
                    <h6>ALL TYPE  PRODUCTS</h6>
                </div>
                <div class="sub-cat ml-2">
                    <h6 class="text-muted"></h6>
                </div>
                <div class="sub-cat ml-2">
                    <h6 class="text-muted"></h6>
                </div>
            </div>
            <div class="d-flex flex-row align-items-center filters">
                <div class="d-flex flex-row align-items-center"></div>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-4 col-lg-4 mt-2">
            <div class="p-4 bg-white rounded">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                        <div><i class="fa fa-heart-o ml-2"></i></div>
                    </div>
                    <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="images/Dish washer sticker-01-01.jpg" height="250"></div>
                    <div class="text-center"><span class="p-name">Dish Wash</span></div>
                    <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                        <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <div class="buttons">
                            <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-dark border-dark price" type="button"></button><button class="btn btn-outline-primary text-dark border-dark cart" type="button"><i class="fa fa-shopping-cart p-1"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 mt-2">
            <div class="p-4 bg-white rounded">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                        <div><i class="fa fa-heart-o ml-2"></i></div>
                    </div>
                    <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="images/Antiseptic sticker-01.jpg" height="250"></div>
                    <div class="text-center"><span class="p-name">Antiseptic</span></div>
                    <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                        <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <div class="buttons">
                            <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-dark border-dark price" type="button"></button><button class="btn btn-outline-primary text-dark border-dark cart" type="button"><i class="fa fa-shopping-cart p-1"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>  
      
        <div class="col-md-4 col-lg-4 mt-2">
            <div class="p-4 bg-white rounded">
                <div class="d-flex flex-column">
                   
                    <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="images/ <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                        <div><i class="fa fa-heart-o ml-2"></i></div>
                     <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="images/Handwash Label final-01.jpg" height="250"></div>
                    <div class="text-center"><span class="p-name">Handwash</span></div>
                    <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                        <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <div class="buttons">
                            <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-dark border-dark price" type="button"></button><button class="btn btn-outline-primary text-dark border-dark cart" type="button"><i class="fa fa-shopping-cart p-1"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'></script>
                                </body>
                            </html>