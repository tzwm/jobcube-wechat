(function() {
  var companyItems = document.getElementsByClassName('company-item');
  for ( var i = 0; i < companyItems.length; i++) {
    companyItems[i].addEventListener('touchstart', function() {
      this.style.backgroundColor = 'blue';
    });
    companyItems[i].addEventListener('touchend', function() {
      this.style.backgroundColor = 'white';
    });
    companyItems[i].addEventListener('click', function() {
      window.location = '/inviters/show/1';
    });
  }

  $(window).scroll(function() {
    var companyItems = $('#company-items');
    var viewH = companyItems.height();
    var contentH = companyItems.get(0).scrollHeight;
    var scrollTop = companyItems.scrollTop();
    if($(window).scrollTop() + $(window).height() > $(document).height() - 10) {
      alert("near bottom!");
    }
  });
}());
