$(".btn-pineapple").click(function (e) {
  $(this).toggleClass('active');
  $('.pineapple').toggle();
  $("li:contains('pineapple')").toggle();
  if ($(this).hasClass('active')) {
    $('#pineapple').attr('value', 'True');
  } else {
    $('#pineapple').attr('value', 'False');
  }
  calcPrice();
});

$(".btn-pepperoni").click(function (e) {
  $(this).toggleClass('active');
  $('.pep').toggle();
  $("li:contains('pepperoni')").toggle();
  if ($(this).hasClass('active')) {
    $('#pepperoni').attr('value', 'True');
  } else {
    $('#pepperoni').attr('value', 'False');
  }
  calcPrice();
});

$(".btn-mushrooms").click(function (e) {
  $(this).toggleClass('active');
  $('.mushroom').toggle();
  $("li:contains('mushrooms')").toggle();
  if ($(this).hasClass('active')) {
    $('#mushroom').attr('value', 'True');
  } else {
    $('#mushroom').attr('value', 'False');
  }
  calcPrice();
});

$(".btn-green-peppers").click(function (e) {
  $(this).toggleClass('active');
  $('.greenpepper').toggle();
  $("li:contains('green peppers')").toggle();
  if ($(this).hasClass('active')) {
    $('#pepper').attr('value', 'True');
  } else {
    $('#pepper').attr('value', 'False');
  }
  calcPrice();
});

$(".btn-sausage").click(function (e) {
  $(this).toggleClass('active');
  $('.sausage').toggle();
  $("li:contains('sausage')").toggle();
  if ($(this).hasClass('active')) {
    $('#sausage').attr('value', 'True');
  } else {
    $('#sausage').attr('value', 'False');
  }
  calcPrice();
});

$(".btn-olives").click(function (e) {
  $(this).toggleClass('active');
  $('.olive').toggle();
  $("li:contains('olives')").toggle();
  if ($(this).hasClass('active')) {
    $('#olive').attr('value', 'True');
  } else {
    $('#olive').attr('value', 'False');
  }
  calcPrice();
});

$(".btn-sauce").click(function (e) {
  $(this).toggleClass('active');
  $('.sauce').toggle();
  $("li:contains('white sauce')").toggle();
  if ($(this).hasClass('active')) {
    $('#sauce').attr('value', 'True');
  } else {
    $('#sauce').attr('value', 'False');
  }
  calcPrice();
});


$(".btn-cheese").click(function (e) {
  $(this).toggleClass('active');
  $('.cheese ').toggle();
  $("li:contains('gluten-free crust')").toggle();
  if ($(this).hasClass('active')) {
    $('#cheese').attr('value', 'True');
  } else {
    $('#cheese').attr('value', 'False');
  }
  calcPrice();
});

$(".yes").click(function (e) {
  $(this).toggleClass('active');
  $('.ketchup ').toggle();                                    
  $("li:contains('ketchup')").toggle();
  if ($(this).hasClass('active')) {
    $('#ketchup').attr('value', 'True');
  } else {
    $('#ketchup').attr('value', 'False');
  }
  calcPrice();
});

function calcPrice() {
  var totalPrice = 2;         /*--min cost for crust--*/

  if ($('.btn-pineapple').hasClass('active')) {
    totalPrice += 1;
  }
  if ($('.btn-pepperoni').hasClass('active')) {
    totalPrice += 1;
  }
  if ($('.btn-mushrooms').hasClass('active')) {
    totalPrice += 1;
  }
  if ($('.btn-green-peppers').hasClass('active')) {
    totalPrice += 1;
  }
  if ($('.btn-sausage').hasClass('active')) {
    totalPrice += 2;
  }
  if ($('.btn-olives').hasClass('active')) {
    totalPrice += 2;
  }
  if ($('.btn-sauce').hasClass('active')) {
    totalPrice += 2;
  }
  if ($('.btn-crust').hasClass('active')) {
    totalPrice += 3;
  }
  if ($('.btn-cheese').hasClass('active')) {
    totalPrice += 2;
  }
  if ($('.crust-gluten-free').hasClass('active')) {
    totalPrice += 3;
  }
  if ($('.ketchup.yes').hasClass('active')) {
    totalPrice += 0.5;
  }
  $('#total-price').attr('value', totalPrice);
  $('#totalPrice').html(totalPrice);

}