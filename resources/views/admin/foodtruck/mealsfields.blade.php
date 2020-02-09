<div class="form-group">
    <input type="text" class="form-control" value="" name="name" placeholder="name" required>
    </div>
    <div class="form-group">
    <input type="number" class="form-control" value="" name="price" placeholder="price" required>
    </div>

    <div class="form-group">
    <input type="file" class="form-control" value="" name="img" placeholder="img" required>
    </div>
    <div class="form-group">
    <select  class="form-control"  name="category_id" placeholder="category_id" required>
        @foreach ($categories as $item)
    <option value="{{ $item->id }}"> {{ $item->name }} </option>
        @endforeach
    </select>
    </div>
@if (isset($foodtruck))
<input type="hidden" name="foodtruck_id" value="{{$foodtruck->id}}">
@else

@endif


    <div class="form-group">
        <textarea  class="form-control" value="" name="description" placeholder="description" required></textarea>
        </div>
        <div class="form-group">
            SPECIAL MENU <input type="checkbox" value="1" name="is_special" id="is_special">
            </div>


    <div class="form-group">
       <button type="submit" class="btn btn-success">save</button>
    </div>
