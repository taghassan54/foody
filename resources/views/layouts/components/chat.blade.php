<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #ff7404;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 60px;
  border-radius: 150px;
  z-index: 5;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 60px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  z-index: 100;

}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.msg-container{
    border:1px solid black;width:100%;height:200px;overflow:scroll;
}
</style>

<button class="open-button" onclick="openForm()"><i class="fa fa-comment"></i></button>

<div class="chat-popup" id="myForm">
  <form action="/send-message" id="chat" method="POST" class="form-container">
    @csrf
    <h3>how i can help you ?</h3>

    <label for="msg"><b>Message</b></label>


    <div class="msg-container p-2">

        @for ($i = 0; $i < 30; $i++)

        <div class="card bg-light p-2 m-2 @if($i%2==0) text-right @endif" >
            <p class="mb-0">Some Message text here</p>
           </div>

        @endfor



    </div>

    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script src="/user/js/jquery-3.2.1.min.js"></script>

<script>
function openForm() {
    console.log('open')
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

$("#chat").submit(function( event ) {
  alert( "Handler for .submit() called." );
  event.preventDefault();
});
</script>
