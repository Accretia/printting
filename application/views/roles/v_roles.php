<?php
	$data['title'] = "xxxx";
	$this->load->view('v_header',$data);
?>
<body>
	<div id="wrapper">
		<?php $this->load->view('v_nav');?>
		<div id="page-wrapper" style="min-height: 98%;">
		   <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <div class="panel panel-default">xxx</div>
                    </div>

                </div>
           <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Filter</h3>
                            </div>
                            <div class="panel-body">
                                <form action="" method="post">
                                    <ul class="filter-menu">
                                        <li>
                                            <label>Name :</label>
                                            <input name="name">
                                        </li>
                                        <li>
                                            <label>Filter :</label>
                                            <input type="submit" class="btn-primary" value="Filter">
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                       <div class="panel panel-default" style="width: 70%;">
                           <div class="panel-heading">
                                <h3 class="panel-title">XXX Data</h3>
                            </div>
                            <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><input id="test" name="test" type="checkbox"></th>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input id="test" name="test[]" type="checkbox"></td>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td><input id="test" name="test[]" type="checkbox"></td>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td><input id="test" name="test[]" type="checkbox"></td>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td><input id="test" name="test[]" type="checkbox"></td>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td><input id="test" name="test[]" type="checkbox"></td>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td><input id="test" name="test[]" type="checkbox"></td>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td><input id="test" name="test[]" type="checkbox"></td>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td><input id="test" name="test[]" type="checkbox"></td>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="5"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                       </div>
                    </div>
                </div>
		</div>


	</div>


</body>