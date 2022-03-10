//sidebar
(function () {
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl)
    })
  })()
 

$(document).ready(function () {
    $('#open-menu').click(function () {
    $('#nav-menu').modal('show');
  });
});