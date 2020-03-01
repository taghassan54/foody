<!-- Button to Open the Modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
    Add New
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">add new </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{ Route('sliders.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
                @include('admin.sliders.fields')
            </form>
        </div>



      </div>
    </div>
  </div>
