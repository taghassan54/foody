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
  margin: 5px 0 15px 0;
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
  padding: 10px 16px;
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
   width:100%;height:250px;overflow:scroll;
}
</style>

<button class="open-button" onclick="openForm()"><i class="fa fa-comment"></i></button>

<div class="chat-popup" id="myForm">
<form action="{{ Route('chats.store') }}" id="chat" method="POST" class="form-container">
    @csrf
    <h3>how We can help you ?</h3>

    <label for="msg"><b>Message</b></label>


    <div class="msg-container p-2">

        <div class="msg-list">
            @foreach (App\Chat::where([['from',Auth::user()->id],['to',$foodtruck->id],['sender','user']])->orWhere([['from',Auth::user()->id],['to',$foodtruck->id],['sender','food-truck']])->get() as $msg)

            <div class="card bg-light p-2 m-2 @if($msg->sender=='food-truck') text-right @endif" >
            <p class="mb-0">{{$msg->message }}</p>
               </div>

            @endforeach
        </div>




    </div>

    <textarea placeholder="Type message.." name="message" id="msg" required></textarea>
@if (Auth::user()->role==0)
<input type="hidden" name="to" value="{{ $foodtruck->id }}">
<input type="hidden" name="from" value="{{ Auth::user()->id }}">
<input type="hidden" name="sender" value="user">

@else

@endif
    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script src="/user/js/jquery-3.2.1.min.js"></script>
<script src="/js/axios.min.js"></script>

<script>
function openForm() {
    console.log('open')
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

$("#chat").submit(function( event ) {
  event.preventDefault();


    var msg =$('#msg').val()

    axios.post(this.action,$(this).serialize()).then(
        res=>{
            console.log(res)
        }
    ).catch()
    $('#msg').val('')
  $('.msg-list').append(`
  <div class="card bg-light p-2 m-2 " >
            <p class="mb-0">${msg}</p>
           </div>
  `)
  var scrollPos =  $(".msg-container").offset().top;

});
</script>
