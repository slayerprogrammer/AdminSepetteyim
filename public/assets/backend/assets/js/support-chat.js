$(function() {
  var INDEX = 0;
  $("#chat-submit").click(function(e) {
    e.preventDefault();
    var msg = $("#chat-input").val(); 
    if(msg.trim() == ''){
      return false;
    }
    generate_message(msg, 'self');
    var buttons = [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ];
    setTimeout(function() {      
      generate_message(msg, 'user');  
    }, 1000)

  })

  function generate_message(msg, type) {
    INDEX++;
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"data:image/jpeg;base64,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\">";
    str += "            <img src=\"data:image/jpeg;base64,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\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);    
  }  

  $(document).delegate(".chat-btn", "click", function() {
    var value = $(this).attr("chat-value");
    var name = $(this).html();
    $("#chat-input").attr("disabled", false);
    generate_message(name, 'self');
  })

  $("#chat-circle").click(function() {    
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })

  $(".chat-box-toggle").click(function() {
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
})