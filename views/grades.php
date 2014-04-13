<?php include('_header_loggedin.php'); ?>
<style>
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Ocena</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Articles</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> 6<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">News</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> 5+<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Newsletters</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> 5<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Comments</a>-->
                                        <!--<span class="badge">42</span>-->
                                        <input type="checkbox" name="option1" value="Milk"> 4+<br>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Waga</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <!--<a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>-->
                                        <input type="checkbox" name="option1" value="Milk"> 4<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<a href="http://www.jquery2dotnet.com">Invoices</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> 3<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<a href="http://www.jquery2dotnet.com">Shipments</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> 2<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<a href="http://www.jquery2dotnet.com">Tex</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> 1<br>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Typ</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <!--<a href="http://www.jquery2dotnet.com">Change Password</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> sprawdzian<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>-->
                                        <input type="checkbox" name="option1" value="Milk"> kartkówka<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<a href="http://www.jquery2dotnet.com">Import/Export</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> zadanie domowe<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">Delete Account</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> odpowiedź ustna<br>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Przedmiot</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> j. polski<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> matematyka<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> chemia<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>-->
                                        <input type="checkbox" name="option1" value="Milk"> fizyka<br>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <h1>
                    Accordion Menu With Icon</h1>
                Admin Dashboard Accordion Menu
            </div>
        </div>
    </div>
</div>

<?php include('_footer_loggedin.php'); ?>
