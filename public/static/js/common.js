let flag = false;
$('.display').click(function () {
  flag = !flag;
  if (flag) {
    $('.display').html('隐藏');
    $('#pwd').attr('type','text');
  } else {
    $('.display').html('显示');
    $('#pwd').attr('type','password');
  }
});