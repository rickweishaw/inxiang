let flag = false;
let frm = $('form');
let emailExp = new RegExp('^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$');

$('#upload').change(function () {
  let pic = this.files[0];
  preview(pic);
});

preview = (pic) => {
  let r = new FileReader();
  r.readAsDataURL(pic);
  r.onload = function() {
    $path = this.result;
    $('#base64').attr('value', this.result).show();
    $('#avatar').attr('src', this.result).show();
  }
}

$('#showEdit').click(function (){
  $('aside ul li:nth-child(1)').addClass('active');
  $('aside ul li:nth-child(2)').removeClass('active');
  $('aside ul li:nth-child(3)').removeClass('active');
  $('aside ul li:nth-child(4)').removeClass('active');

  $('.edit').css('display', 'block');
  $('.password').css('display', 'none');
  $('.c-avatar').css('display', 'none');
  $('.email').css('display', 'none');
});

$('#showPwd').click(function (){
  $('aside ul li:nth-child(2)').addClass('active');
  $('aside ul li:nth-child(1)').removeClass('active');
  $('aside ul li:nth-child(3)').removeClass('active');
  $('aside ul li:nth-child(4)').removeClass('active');

  $('.edit').css('display', 'none');
  $('.password').css('display', 'block');
  $('.c-avatar').css('display', 'none');
  $('.email').css('display', 'none');
});
$('#showEmail').click(function (){
  $('aside ul li:nth-child(3)').addClass('active');
  $('aside ul li:nth-child(1)').removeClass('active');
  $('aside ul li:nth-child(2)').removeClass('active');
  $('aside ul li:nth-child(4)').removeClass('active');

  $('.edit').css('display', 'none');
  $('.password').css('display', 'none');
  $('.c-avatar').css('display', 'none');
  $('.email').css('display', 'block');
});

$('.showAvatar').click(function (){
  $('aside ul li:nth-child(4)').addClass('active');
  $('aside ul li:nth-child(3)').removeClass('active');
  $('aside ul li:nth-child(2)').removeClass('active');
  $('aside ul li:nth-child(1)').removeClass('active');

  $('.edit').css('display', 'none');
  $('.password').css('display', 'none');
  $('.c-avatar').css('display', 'block');
  $('.email').css('display', 'none');
});

frm[1].onsubmit = function () {
  if (frm[1].captcha.value.length < 6 || frm[1].captcha.value.length > 6) {
    alert('验证码必须为 6 位，你输入了'+ frm[1].captcha.value.length  + ' 位');
    frm[1].captcha.value = '';
    frm[1].captcha.focus();
    return false;
  }

  if (frm[1].password.value.length < 6 || frm[1].password.value.length > 12) {
    alert('密码不能小于6位或大于12位，你输入了 ' + frm[1].password.value.length  + ' 位');
    frm[1].password.value = '';
    frm[1].password.focus();
    return false;
  }
  return true;
}

frm[2].onsubmit = () => {
  if (!emailExp.test(frm[2].new.value)) {
    alert('邮箱格式不正确，正确格式举例：example@exp.com');
    frm[2].new.value = '';
    frm[2].new.focus();
    return false;
  }
  return true;
}

$('.show').click(function () {
  flag = !flag;
  if (flag) {
    $('.show').html('隐藏');
    $('#password').attr('type','text');
  } else {
    $('.show').html('显示');
    $('#password').attr('type','password');
  }
});