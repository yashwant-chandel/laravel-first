@extends('Admin/admin')
@section('admin')


<div class="container">
<?php  $results = Session::get('success');
							if(isset($results)){?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>{{$results}}</strong> 
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php	} ?>
  <div class="row">
                    
                    <div class="col-md-4 col-lg-4 grid-margin stretch-card my-4 ">
                            <div class="card bg-success card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Total Blogs</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1"></p>
                                    <h2 class="text-info">{{$blogs}}</h2>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                      <!-- <canvas id="status-summary" width="340" height="132" style="display: block; width: 170px; height: 66px;" class="chartjs-render-monitor"></canvas> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                            <div class="col-md-4 col-lg-4 grid-margin stretch-card my-4 ">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Total Products</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1"></p>
                                    <h2 class="text-info">{{$products}}</h2>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                      <canvas id="status-summary" width="340" height="132" style="display: block; width: 170px; height: 66px;" class="chartjs-render-monitor"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                            <div class="col-md-4 col-lg-4 grid-margin stretch-card my-4 ">
                            <div class="card bg-danger card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Total Users</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1"></p>
                                    <h2 class="text-info">{{count($users)}}</h2>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                      <!-- <canvas id="status-summary" width="340" height="132" style="display: block; width: 170px; height: 66px;" class="chartjs-render-monitor"></canvas> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                    </div>
                         <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h2 class="card-title card-title-dash">Users</h2>
                                  </div>
                                  
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                    
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created On</th>
                                      </tr>
                                    </thead>
                                   <?php $count = 0; ?>
                                    <tbody>
                                        @foreach($users as $u)
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <h4 class="text-dark"><?php echo $count+1; ?></h4>
                                          </div>
                                        </td>
                                        <td>
                                              <h4 class="text-dark">{{$u->name}}</h4>
                                        </td>
                                        <td>
                                          <h4 class="text-dark">{{$u->Username}}</h4>
                                        
                                        </td>
                                        <td>
                                          <div>
                                            <h4 class="text-dark">{{$u->created_at}}</h4>
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
</div>
@endsection