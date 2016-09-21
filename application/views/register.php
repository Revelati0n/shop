<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="well">
        <h2>สมัครสมาชิก</h2>
        <p><strong>กรุณากรอกข้อมูลให้ครบเพื่อลงทะเบียนสมาชิก</strong></p>
        <form ng-controller="registerCtrl" name="userform"  ng-submit="login()">
          <div class="form-group">
            <label class="control-label" for="input-username">Username</label>
            <input type="text" name="username" ng-model="username" placeholder="Username" id="input-username" class="form-control" autofocus />
          </div>
          <div class="form-group">
            <label class="control-label" for="input-password">Password</label>
            <input type="password" name="password" ng-model="password" placeholder="Password" id="input-password" class="form-control" />
          </div>
          <div class="form-group">
            <label class="control-label" for="input-Repassword">Re-Password</label>
            <input type="password" name="repassword" ng-model="repassword" placeholder="RE-Password" id="input-Repassword" class="form-control" />
          </div>
          <div class="form-group">
            <label class="control-label" for="input-email">Email</label>
            <input type="email" name="email" ng-model="email" placeholder="Email" id="input-email" class="form-control" />
          </div>
          <button type="submit" ng-disabled="userform.password.$pristine || userform.username.$pristine || userform.repassword.$pristine || userform.email.$pristine" class="btn btn-primary"> <i class="fa fa-edit"></i> สมัครสมาชิก</button>
        </form>
      </div>
    </div>
    <div class="col-sm-4">
          <div class="well">
            <h2>เข้าสู่ระบบ</h2>
            <p><strong>หากท่านมี Username และ Password อยู่แล้วเข้าสู่ระบบได้ที่นี่</strong></p>
            <a href="<?=base_url();?>Login" class="btn btn-success"> <i class="fa fa-mouse-pointer"></i> คลิกเลย </a></div>
        </div>
  </div>

</div>
<script>
app.controller('registerCtrl', function($scope, $timeout, $http) {
  $scope.login = function () {
    console.log('registersubmit');
    data = {
      username: $scope.username,
      password: $scope.password,
      repassword: $scope.repassword,
      email: $scope.email
    };
    $http.post('<?=base_url();?>Register/Register', data).then(function successCallback(response) {
      console.info(response);
      if(response.data.responseCode == 0){
        new PNotify({
          title: 'ระบบสมาชิก',
          text: 'สมัครสมาชิกสำเร็จ',
          type: 'success',
          icon: 'fa fa-bell',
          animate: {
            animate: true,
            in_class: 'slideInDown',
            out_class: 'slideOutUp'
          }
        });
        setTimeout(function(){
          location.reload();
        }, 2000);
      }else{
        new PNotify({
          title: 'ระบบสมาชิก',
          text: response.data.responseMsg,
          type: 'error',
          icon: 'fa fa-bell',
          animate: {
            animate: true,
            in_class: 'slideInDown',
            out_class: 'slideOutUp'
          }
        });
      }
    }, function errorCallback(response) {
      location.reload();
    });
  }
});
</script>
