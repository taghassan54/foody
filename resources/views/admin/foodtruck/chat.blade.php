@extends('layouts.admin')

@section('content')

@section('css')
    <link rel="stylesheet" href="/css/chat.css">
@endsection

<div class="container">
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>

          </div>
          <div class="inbox_chat">
              {{-- {{ dd($foodtruck->ChatWith) }} --}}
              @foreach ($foodtruck->ChatWith as $chatWith)
                    <a href="#">
                        <div class="chat_list active_chat">
                            <div class="chat_people">
                                <div class="chat_ib">
                                  <h5>{{ $chatWith->name }}</h5>

                                </div>
                              </div>
                            </div>
                    </a>
                @endforeach

          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history">
              @if($foodtruck->ChatWith->count()>0)

              @foreach ($foodtruck->GetChatWith($foodtruck->ChatWith->first()->id)->get() as $item)
 {{--              <div class="incoming_msg">
              <div class="{{ ?'received_msg':'outgoing_msg'  }} outgoing_msg">
                  <div class="received_withd_msg">
                  <p><b>{{$item->sender}}</b> Test which is a new approach to have all
                      solutions</p>
                    <span class="time_date"> 11:01 AM    |    June 9</span></div>
                </div>
              </div> --}}
              @if($item->sender=='user')
              <div class="incoming_msg">
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p>{{ $item->message }}</p>
                    <span class="time_date"> {{ $item->created_at }}</span></div>
                </div>
              </div>
              @else
              <div class="outgoing_msg">
                <div class="sent_msg">
                    <p>{{ $item->message }}</p>
                  <span class="time_date"> {{ $item->created_at }}</span> </div>
              </div>

              @endif
              @endforeach



        @endif
        </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>



    </div></div>


    @endsection
