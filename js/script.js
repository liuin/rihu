$(document).ready(function() {
  //头部选择
  $('.navbar-nav .dropdown-menu a').on('click',function  (e) {
    e.stopPropagation();
    $('.navbar-header button').trigger('click');
  })
})