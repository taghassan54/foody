<div class="form-group">
    <input type="text" class="form-control" value="" name="name" placeholder="name" required>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" value="" name="owner" placeholder="owner" required>
    </div>
    <div class="form-group">
    <input type="email" class="form-control" value="" name="email" placeholder="email" required>
    </div>
    <div class="form-group">
    <input type="password" class="form-control" value="" name="password" placeholder="password" required>
    </div>
    <div class="form-group">
    <input type="file" class="form-control" value="" name="img" placeholder="img" required>
    </div>
    <div class="form-group">
    <select  class="form-control"  name="city_id" placeholder="city_id" required>
        @foreach ($Cities as $item)
    <option value="{{ $item->id }}"> {{ $item->name }} </option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" value="" name="fee" placeholder="fee" required>
        </div>

    <div class="form-group">
        <textarea  class="form-control" value="" name="description" placeholder="description" required></textarea>
        </div>



    <div class="form-group">
       <button type="submit" class="btn btn-success">save</button>
    </div>
