<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!-- Statistic -->
<div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-danger">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-white text-left">
                                            <h3 class="text-white">5</h3>
                                            <span>My Shops </span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-pointer text-white font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-success">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-white text-left">
                                            <h3 class="text-white">500</h3>
                                            <span>Cups of Coffee Sold</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-cup text-white font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-amber">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-white text-left">
                                            <h3 class="text-white">60</h3>
                                            <span>Employees</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-users text-white font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-info">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-white text-left">
                                            <h3 class="text-white">30</h3>
                                            <span> Drink Varieties </span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-eye text-white font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div id="recent-transactions" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Customers</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                               
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Invoice#</th>
                                                <th class="border-top-0">Stayed</th>
                                                <th class="border-top-0">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar">
                                                    </span>
                                                    <span>Elizabeth W.</span>
                                                </td>
                                                
                                                <td class="text-truncate">$ 1200.00</td>
                                            </tr>
                                       
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> Pending</td>
                                                <td class="text-truncate"><a href="#">INV-001003</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar">
                                                    </span>
                                                    <span>Megan S.</span>
                                                </td>
                                                
                                                <td class="text-truncate">$ 3200.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                <td class="text-truncate"><a href="#">INV-001004</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar">
                                                    </span>
                                                    <span>Andrew D.</span>
                                                </td>
                                               
                                                <td class="text-truncate">$ 4500.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                <td class="text-truncate"><a href="#">INV-001005</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar">
                                                    </span>
                                                    <span>Walter R.</span>
                                                </td>
                                               
                                                <td class="text-truncate">$ 1500.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
