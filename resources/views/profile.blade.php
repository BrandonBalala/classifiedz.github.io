@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <a href="#" >Edit Profile</a>

        <a href="/" >Logout</a>
       <br>
<p class=" text-info"><a href="#">Rate and Reviews </a></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Username</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"><a href="#"> <img alt="User Picture" src="https://www.safeocs.gov/cos/resources/app/images/av1_1.png" height="130" /> </a></div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Register date:</td>
                        <td>10/10/2017</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                      <tr>
                        <td>Home Address</td>
                        <td>Laval, Montreal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>tuna@gmail.com</td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>514-123-4567(Landline)<br><br>514-765-4321(Mobile)
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Sale History</a>
                  <a href="#" class="btn btn-primary">Wish to Buy</a>
                </div>
              </div>
            </div>
            <!--
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            -->
          </div>
        </div>
      </div>
    </div>

    @endsection