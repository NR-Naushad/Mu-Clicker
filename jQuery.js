$('.loginBtn').click(function(){
    $('.login').show();
    $('.signUp').hide();
    /* border bottom on button click */
    $('.loginBtn').css({'border-bottom' : '2px solid #ff4141'});
    /* remove border after click */
    $('.signUpBtn').css({'border-style' : 'none'});
  });
   
   
  /* Show sign Up form on button click */
   
  $('.signUpBtn').click(function(){
    $('.login').hide();
    $('.signUp').show();
    /* border bottom on button click */
    $('.signUpBtn').css({'border-bottom' : '2px solid #ff4141'});
     /* remove border after click */
     $('.loginBtn').css({'border-style' : 'none'});
  });


  function validation()
  {
    var id=document.f1.email.value;
    var ps=document.fi.password.value;
    if(id.lenght=="" && ps.lenght==""){
      alert("user name and password fields are empty");
      return false;
    }
    else{
      if(id.lenght==""){
        alert("user name is empty");
        return false;
      }
      if (ps.lenght==""){
        alert("password field is empty");
        return false;
      }
    }
  }