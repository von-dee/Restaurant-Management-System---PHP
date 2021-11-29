
// var url = "http://localhost/scheckskitchen/api/api.php";
var url = "https://www.kweyifoods.com/api/api.php";

var selected_foods_string = localStorage.getItem("foodsselected");
var selected_foods = JSON.parse(selected_foods_string);

if(selected_foods == null || selected_foods == undefined || selected_foods == ""){
  var selected_foods = [];
}

var totalitems = 0;
var totalamount = 0;


function Generator() {};

Generator.prototype.rand =  Math.floor(Math.random() * 26) + Date.now();

Generator.prototype.getId = function() {
   return this.rand++;
};

var idGen =new Generator();

// localStorage.setItem("key","value");

// localStorage.getItem("key"); 



$("p").click(function(){
  // action goes here!!
  // this is the id of the form


});

  


$("#myForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    // var url = form.attr('action');    

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            $('form-control').val("");
            if(data.msg == "success"){
              
              sweetalert_success(data.msg_head,data.msg_body);   

              if($("input[name*='actions']").val() == "push_cartcheckout"){
                clearstorage();
                // location.reload(true); 
              }
              
            }else if(data.msg == "error"){
              sweetalert_error(data.msg_head,data.msg_body)
            }
        }
    });

});

function clearstorage(){
  localStorage.clear();
}

function sweetalert_success(head,body_txt) {
  Swal.fire({
    icon: 'success',
    title: 'Success',
    text: head,
    footer: '<a href>'+body_txt+'</a>'
  })   
};

function sweetalert_error(head,body_txt) {
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: head,
    footer: '<a href>'+body_txt+'</a>'
  })
};


function getDayToday(){
  var today = new Date();
  var day = today.getDay();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  console.log("Today is : " + daylist[day] + ".");
  return daylist[day];
}

function getCheckTime(){
  var startTime = '00:00:00';
  var endTime = '15:00:00';

  currentDate = new Date()   

  startDate = new Date(currentDate.getTime());
  startDate.setHours(startTime.split(":")[0]);
  startDate.setMinutes(startTime.split(":")[1]);
  startDate.setSeconds(startTime.split(":")[2]);

  endDate = new Date(currentDate.getTime());
  endDate.setHours(endTime.split(":")[0]);
  endDate.setMinutes(endTime.split(":")[1]);
  endDate.setSeconds(endTime.split(":")[2]);


  // valid = startDate < currentDate && endDate > currentDate;
  if(startDate < currentDate && endDate > currentDate){
    return true
  }else{
    return false
  }
 
}


function add_to_cart(code_,url_,name_,price_,quantity_,day_) {

    var today_ = getDayToday();
    var time_ = getCheckTime();
    

    if(day_ == today_){

        if(time_ == true){

          code_ = idGen.getId();

          var obj = {
              item_code: code_.toString(),
              item_name: name_,
              item_url: url_,
              item_price: price_,
              item_quantity: quantity_
          } 

          selected_foods.push(obj);

          var totalamount = 0;
          var totalitems = 0;

          $("#cartitems").empty();

          $.each(selected_foods, function(index, value){
              $("#cartitems").append('<li class="cart-item"><div class="cart__item-img"><img src="assets/images/'+value.item_url+'" alt="thumb"></div><div class="cart__item-content"><h6 class="cart__item-title">'+  value.item_name  +'</h6><div class="cart__item-detail">₵'+  value.item_price  +'</div><i class="cart__item-delete" onclick="remove_from_cart(\''+  value.item_code +'\');">&times;</i></div></li>');
              
              totalamount = parseFloat(totalamount) + (parseFloat(value.item_price) * parseFloat(value.item_quantity));
              totalamount = parseFloat(totalamount).toFixed(2);
              document.getElementById("totalamount").value = totalamount;
              document.getElementById("total_text").innerHTML = "₵"+totalamount.toString();
              document.getElementById("subtotal_val").innerHTML = "₵"+totalamount.toString();
              document.getElementById("subtotal").value = totalamount.toString();
              
              
              totalitems = totalitems + 1;
              document.getElementById("total_id").innerHTML = totalitems;

          });

          var selected_foods_var = JSON.stringify(selected_foods);
          document.getElementById("foodsselected").value = selected_foods_var;
          localStorage.setItem("foodsselected",selected_foods_var);
          
          document.getElementById("totalitems").value = totalitems;

          sweetalert_success("Added to Cart Successfully","Food was added to cart successfully"); 

        }else{

          sweetalert_error("Sorry Meal not available at this Time. Try Tomorrow 9am to 5pm Only"); 

        }
        

    }else{

      sweetalert_error("This food is Available on " + day_ +"s","This food will be available on " + day_); 

    }
    

};



function add_to_cart_and_buy(code_,url_,name_,price_,quantity_,day_) {

  var today_ = getDayToday();
  var time_ = getCheckTime();
  

  if(day_ == today_){

      if(time_ == true){

        code_ = idGen.getId();

        var obj = {
            item_code: code_.toString(),
            item_name: name_,
            item_url: url_,
            item_price: price_,
            item_quantity: quantity_
        } 

        selected_foods.push(obj);

        var totalamount = 0;
        var totalitems = 0;

        $("#cartitems").empty();

        $.each(selected_foods, function(index, value){
            $("#cartitems").append('<li class="cart-item"><div class="cart__item-img"><img src="assets/images/'+value.item_url+'" alt="thumb"></div><div class="cart__item-content"><h6 class="cart__item-title">'+  value.item_name  +'</h6><div class="cart__item-detail">₵'+  value.item_price  +'</div><i class="cart__item-delete" onclick="remove_from_cart(\''+  value.item_code +'\');">&times;</i></div></li>');
            
            totalamount = parseFloat(totalamount) + (parseFloat(value.item_price) * parseFloat(value.item_quantity));
            totalamount = parseFloat(totalamount).toFixed(2);
            document.getElementById("totalamount").value = totalamount;
            document.getElementById("total_text").innerHTML = "₵"+totalamount.toString();
            document.getElementById("subtotal_val").innerHTML = "₵"+totalamount.toString();
            document.getElementById("subtotal").value = totalamount.toString();
            
            
            totalitems = totalitems + 1;
            document.getElementById("total_id").innerHTML = totalitems;

        });

        var selected_foods_var = JSON.stringify(selected_foods);
        document.getElementById("foodsselected").value = selected_foods_var;
        localStorage.setItem("foodsselected",selected_foods_var);
        
        document.getElementById("totalitems").value = totalitems;

        sweetalert_success("Added to Cart Successfully","Food was added to cart successfully"); 

              
        // Simulate an HTTP redirect:
        window.location.replace("https://www.kweyifoods.com/checkout.html");
        // window.location.replace("http://localhost/scheckskitchen/checkout.html");

      }else{

        sweetalert_error("Sorry Meal not available at this Time. Try Tomorrow 9am to 5pm Only"); 

      }
      

  }else{
    sweetalert_error("This food is Available on " + day_ +"s","This food will be available on " + day_); 
  }
  

};



function remove_from_cart(item) {
  
    const indiceABorrar = selected_foods.findIndex(q => q.item_code === item);


    if (-1 != indiceABorrar) {
        selected_foods.splice(indiceABorrar, 1);
        totalitems = totalitems - 1;
        document.getElementById("totalitems").value = totalitems;
        
        $("#cartitems").empty();
        var totalamount = 0;
        var totalitems = 0;

        $.each(selected_foods, function(index, value){

          $("#cartitems").append('<li class="cart-item"><div class="cart__item-img"><img src="assets/images/'+  value.item_url  +'" alt="thumb"></div><div class="cart__item-content"><h6 class="cart__item-title">'+  value.item_name  +'</h6><div class="cart__item-detail">₵'+  value.item_price  +'</div><i class="cart__item-delete" onclick="remove_from_cart(\''+  value.item_code +'\');">&times;</i></div></li>');
          
          totalamount = parseFloat(totalamount) + (parseFloat(value.item_price) * parseFloat(value.item_quantity));
          totalamount = parseFloat(totalamount).toFixed(2);
          document.getElementById("totalamount").value = totalamount;
          document.getElementById("total_text").innerHTML = totalamount.toString();
          document.getElementById("subtotal_val").innerHTML = totalamount.toString();
          document.getElementById("subtotal").value = totalamount.toString();
          
          
          totalitems = totalitems + 1;
          document.getElementById("total_id").innerHTML = totalitems;
        });

        if(totalitems == 0){
          document.getElementById("total_id").innerHTML = 0;
          document.getElementById("totalamount").value = "₵00.00";
          document.getElementById("total_text").innerHTML = "₵00.00";
          document.getElementById("subtotal_val").innerHTML = "₵00.00";
          document.getElementById("subtotal").value = "00.00";
          
          
          $("#cartitems").append('<li class="cart-item"><div class="cart__item-content"><h6 class="cart__item-title">No Food In Cart</h6><div class="cart__item-detail"></div></div></li>');
        }
        
        var selected_foods_var = JSON.stringify(selected_foods);
        document.getElementById("foodsselected").value = selected_foods_var;
        localStorage.setItem("foodsselected",selected_foods_var);
        
        document.getElementById("totalitems").value = totalitems;
        
    }
  
};


function load_cart() {

  var selected_foods_string = localStorage.getItem("foodsselected");
  var selected_foods = JSON.parse(selected_foods_string);

  var totalamount = 0;
  var totalitems = 0;

  $("#cartitems").empty();
  $("#cartitems_checkout").empty();

  $.each(selected_foods, function(index, value){

      $("#cartitems").append('<li class="cart-item"><div class="cart__item-img"><img src="assets/images/'+value.item_url+'" alt="thumb"></div><div class="cart__item-content"><h6 class="cart__item-title">'+  value.item_name  +'</h6><div class="cart__item-detail">₵'+  value.item_price  +'</div><i class="cart__item-delete" onclick="remove_from_checkout(\''+  value.item_code +'\');">&times;</i></div></li>');
      
      $("#cartitems_checkout").append('<tr class="cart__product "><td class="cart__product-item"><div class="cart__product-remove" onclick="remove_from_checkout(\''+  value.item_code +'\');"><i class="fa fa-close"></i></div><div class="cart__product-img"><img src="assets/images/'+value.item_url+'" alt="product" /></div><div class="cart__product-title"><h6>'+  value.item_name  +'</h6></div></td><td class="cart__product-price">₵'+  value.item_price  +'</td><td class="cart__product-total">₵'+  value.item_price  +'</td></tr>');
      

      // console.log(value.item_price);
      
      

      totalamount = parseFloat(totalamount) + (parseFloat(value.item_price) * parseFloat(value.item_quantity));
      totalamount = parseFloat(totalamount).toFixed(2);
      document.getElementById("totalamount").value = totalamount;
      document.getElementById("total_text").innerHTML = "₵"+totalamount.toString();
      document.getElementById("subtotal_val").innerHTML = "₵"+totalamount.toString();
      document.getElementById("subtotal").value = totalamount.toString();
      
      var shipping_val = 10.00;
      var ordertotal_val =  parseFloat(shipping_val) + parseFloat(totalamount);
      shipping_val = parseFloat(shipping_val).toFixed(2);;
      ordertotal_val = parseFloat(ordertotal_val).toFixed(2);;
      document.getElementById("shipping").value = parseFloat(shipping_val);
      document.getElementById("ordertotal").value = parseFloat(ordertotal_val);
      document.getElementById("shipping_val").innerHTML = "₵"+shipping_val.toString();
      document.getElementById("ordertotal_val").innerHTML = "₵"+ordertotal_val.toString();
      
      
      totalitems = totalitems + 1;

      document.getElementById("total_id").innerHTML = totalitems;

  });

  var selected_foods_var = JSON.stringify(selected_foods);
  document.getElementById("foodsselected").value = selected_foods_var;
  localStorage.setItem("foodsselected",selected_foods_var);
  
  document.getElementById("totalitems").value = totalitems;

  if(totalitems == 0){
    document.getElementById("total_id").innerHTML = 0;
    document.getElementById("totalamount").value = "₵00.00";
    document.getElementById("total_text").innerHTML = "₵00.00";
    document.getElementById("subtotal_val").innerHTML = "₵00.00";
    document.getElementById("subtotal").value = "00.00";
    document.getElementById("subtotal").value = "00.00";
    
    

    $("#cartitems").append('<li class="cart-item"><div class="cart__item-content"><h6 class="cart__item-title">No Food In Cart</h6><div class="cart__item-detail"></div></div></li>');
  }
 

};


function remove_from_checkout(item) {
  var selected_foods_string = localStorage.getItem("foodsselected");
  var selected_foods = JSON.parse(selected_foods_string);

  const indiceABorrar = selected_foods.findIndex(q => q.item_code === item);


  if (-1 != indiceABorrar) {
      selected_foods.splice(indiceABorrar, 1);
      totalitems = totalitems - 1;
      document.getElementById("totalitems").value = totalitems;
      
      $("#cartitems").empty();
      $("#cartitems_checkout").empty();
      var totalamount = 0;
      var totalitems = 0;

      $.each(selected_foods, function(index, value){
  
        $("#cartitems").append('<li class="cart-item"><div class="cart__item-img"><img src="assets/images/'+value.item_url+'" alt="thumb"></div><div class="cart__item-content"><h6 class="cart__item-title">'+  value.item_name  +'</h6><div class="cart__item-detail">₵'+  value.item_price  +'</div><i class="cart__item-delete" onclick="remove_from_cart(\''+  value.item_code +'\');">&times;</i></div></li>');
        
        $("#cartitems_checkout").append('<tr class="cart__product "><td class="cart__product-item"><div class="cart__product-remove" onclick="remove_from_cart(\''+  value.item_code +'\');"><i class="fa fa-close"></i></div><div class="cart__product-img"><img src="assets/images/'+value.item_url+'" alt="product" /></div><div class="cart__product-title"><h6>'+  value.item_name  +'</h6></div></td><td class="cart__product-price">₵'+  value.item_price  +'</td><td class="cart__product-total">₵'+  value.item_price  +'</td></tr>');
        
  
        totalamount = parseFloat(totalamount) + (parseFloat(value.item_price) * parseFloat(value.item_quantity));
        totalamount = parseFloat(totalamount).toFixed(2);
        document.getElementById("totalamount").value = totalamount;
        document.getElementById("total_text").innerHTML = "₵"+totalamount.toString();
        document.getElementById("subtotal_val").innerHTML = "₵"+totalamount.toString();
        document.getElementById("subtotal").value = totalamount.toString();
        
        var shipping_val = 10.00;
        var ordertotal_val =  parseFloat(shipping_val) + parseFloat(totalamount);
        shipping_val = parseFloat(shipping_val).toFixed(2);;
        ordertotal_val = parseFloat(ordertotal_val).toFixed(2);;
        document.getElementById("shipping").value = parseFloat(shipping_val);
        document.getElementById("ordertotal").value = parseFloat(ordertotal_val);
        document.getElementById("shipping_val").innerHTML = "₵"+shipping_val.toString();
        document.getElementById("ordertotal_val").innerHTML = "₵"+ordertotal_val.toString();
      
        
        totalitems = totalitems + 1;
        document.getElementById("total_id").innerHTML = totalitems;
  
    });
  
    if(totalitems == 0){
      document.getElementById("total_id").innerHTML = 0;
      document.getElementById("totalamount").value = "₵00.00";
      document.getElementById("total_text").innerHTML = "₵00.00";
      document.getElementById("subtotal_val").innerHTML = "₵00.00";
      document.getElementById("subtotal").value = "00.00";
      
      

      $("#cartitems").append('<li class="cart-item"><div class="cart__item-content"><h6 class="cart__item-title">No Food In Cart</h6><div class="cart__item-detail"></div></div></li>');

      $("#cartitems_checkout").append('<tr class="cart__product "><td class="cart__product-item"><div class="cart__product-img"></div><div class="cart__product-title"><h6>No Food In Cart</h6></div></td><td class="cart__product-price"></td><td class="cart__product-quantity"></td></tr>');

    }
    
    var selected_foods_var = JSON.stringify(selected_foods);
    document.getElementById("foodsselected").value = selected_foods_var;
    localStorage.setItem("foodsselected",selected_foods_var);
    
    document.getElementById("totalitems").value = totalitems;
  
      
  }

};





   




