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
                <table class="table table-striped">
    <thead>
      <tr>
        <th>Ocena</th>

        <th>Waga</th>

        <th>Grupa</th>

        <th>Tytuł</th>

        <th>Data</th>

        <th>Przedmiot</th>
      </tr>
    </thead>

    <tbody>
      <tr class=" even">
        <td class="gradeValue"><span>3</span></td>

        <td class="gradeWeight"><span>3</span></td>

        <td class="gradeGroup"><span>egzamin pr&oacute;bny</span></td>

        <td class="gradeTitle"><span>Egzamin z do&#347;wiadcze&#324;
        chemicznych.</span></td>

        <td class="gradeDate"><span>2014-04-04</span></td>

        <td class="subjectName"><span>chemia</span></td>
      </tr>

      <tr class=" odd">
        <td class="gradeValue"><span>5</span></td>

        <td class="gradeWeight"><span>2</span></td>

        <td class="gradeGroup"><span>skomplikowane zadanie domowe</span></td>

        <td class="gradeTitle"><span>Test powt&oacute;rzeniowy - substancje i ich
        przemiany oraz budowa materii.</span></td>

        <td class="gradeDate"><span>2014-04-09</span></td>

        <td class="subjectName"><span>chemia</span></td>
      </tr>

      <tr class=" even">
        <td class="gradeValue"><span>6</span></td>

        <td class="gradeWeight"><span>3</span></td>

        <td class="gradeGroup"><span>egzamin pr&oacute;bny</span></td>

        <td class="gradeTitle"><span>EPR, egzamin z do&#347;wiadcze&#324;
        fizycznych</span></td>

        <td class="gradeDate"><span>2014-04-03</span></td>

        <td class="subjectName"><span>fizyka</span></td>
      </tr>

      <tr class=" odd">
        <td class="gradeValue"><span>3.5</span></td>

        <td class="gradeWeight"><span>4</span></td>

        <td class="gradeGroup"><span>prace klasowe</span></td>

        <td class="gradeTitle"><span>PK1, us&#322;ugi w Polsce, powt&oacute;rzenie do
        matury</span></td>

        <td class="gradeDate"><span>2014-04-03</span></td>

        <td class="subjectName"><span>geografia</span></td>
      </tr>

      <tr class=" even">
        <td class="gradeValue"><span>4.5</span></td>

        <td class="gradeWeight"><span>1</span></td>

        <td class="gradeGroup"><span>kartk&oacute;wki</span></td>

        <td class="gradeTitle"><span>opis sytuacji</span></td>

        <td class="gradeDate"><span>2014-04-07</span></td>

        <td class="subjectName"><span>j. polski</span></td>
      </tr>

      <tr class=" odd">
        <td class="gradeValue"><span>3</span></td>

        <td class="gradeWeight"><span>1</span></td>

        <td class="gradeGroup"><span>kartk&oacute;wki</span></td>

        <td class="gradeTitle"><span>1. kartk&oacute;wka po om&oacute;wieniu iii
        pr&oacute;by gimnazjalnej</span></td>

        <td class="gradeDate"><span>2014-04-02</span></td>

        <td class="subjectName"><span>matematyka</span></td>
      </tr>

      <tr class=" even">
        <td class="gradeValue"><span>4.5</span></td>

        <td class="gradeWeight"><span>1</span></td>

        <td class="gradeGroup"><span>kartk&oacute;wki</span></td>

        <td class="gradeTitle"><span>1</span></td>

        <td class="gradeDate"><span>2014-04-08</span></td>

        <td class="subjectName"><span>j. angielski z</span></td>
      </tr>
    </tbody>
  </table>
            </div>
        </div>
    </div>
</div>

<?php include('_footer_loggedin.php'); ?>
