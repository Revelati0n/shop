<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="well">
        <h2>เข้าสู่ระบบ</h2>
        <p><strong>กรุณากรอกข้อมูลให้ครบเพื่อเข้าสู่ระบบ</strong></p>
        <form ng-controller="loginCtrl" name="userform"  ng-submit="login()">
          <div class="form-group">
            <label class="control-label" for="input-username">Username</label>
            <input type="text" name="username" ng-model="username" placeholder="Username" id="input-username" class="form-control" />
          </div>
          <div class="form-group">
            <label class="control-label" for="input-password">Password</label>
            <input type="password" name="password" ng-model="password" placeholder="Password" id="input-password" class="form-control" />
          </div>
          <button type="submit" ng-disabled="userform.password.$pristine || userform.username.$pristine" class="btn btn-primary"> <i class="fa fa-sign-in"></i> เข้าสู่ระบบ</button>

        </form>
      </div>
    </div>
    <div class="col-sm-6">
          <div class="well">
            <h2>สมัครสมาชิกใหม่</h2>
            <p><strong>สนใจจะเป็นสมาชิกใหม่ของเราสามารถสมัครสมาชิกได้ที่นี่</strong></p>
            <a href="<?=base_url();?>Register" class="btn btn-success"> <i class="fa fa-mouse-pointer"></i> คลิกเลย </a></div>
        </div>
  </div>

</div>
<script>
app.controller('loginCtrl', function($scope, $timeout, $http) {
  $scope.login = function () {
    console.log('loginsubmit');
    data = {
      username: $scope.username,
      password: $scope.password
    };
    $http.post('<?=base_url();?>Login/Login', data).then(function successCallback(response) {
      console.info(response);
      if(response.data.responseCode == 1){
        new PNotify({
          title: 'ระบบสมาชิก',
          text: 'เข้าสู่ระบบสำเสร็จ',
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
          text: 'เข้าสู่ระบบล้มเหลว',
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
