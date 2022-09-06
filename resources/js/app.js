require('./bootstrap');

const messages_el = document.getElementById("messages");
const username_input = document.getElementById('username');
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");



message_form.addEventListener('submit' , function(e) {

    e.preventDefault();


     let has_errors = false;

     if(username_input.value == ""){

         alert("Please Enter Your  Username");
         has_errors = true;
     }

     if(message_input.value == ""){

         alert("Please Enter Your  Message");
         has_errors = true;
     }

     if(has_errors){
         return;
     }

     const options = {
         url:'/send',
         method: 'post',
         data:{
             username: username_input.value,
             message: message_input.value
         }

     };

      axios(options);
});

window.Echo.channel('chat')
    .listen('.message' , (e) => {

         messages_el.innerHTML += '<div class="message"><strong>' + e.username + ':</strong> ' + e.message + '</div>' ;
         /*
          messages_el.innerHTML += '<div class="message btn-success my-2 mx-2 " style="padding: 5px;border-radius: 8px">' +
             '<strong style="display: block">' + username_input.value + ':</strong> ' + message_input.value + '</div>' ;
          */
    });


