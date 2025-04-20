@section('add_form')
<div id="wrapper">
        <form id="survey" action="{{ route('admin.toy.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <fieldset>
                <legend>Add a Toy to the Catalog</legend>
                <div class="form-row">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" >
                </div>

                <div class="form-row">
                    <label for="description">Description</label>
                </div>
                <div class="form-row">
                    <textarea name="description" id="description"></textarea>
                </div>

                <div class="form-row">
                    <label for="price">Price (CAD)</label>
                    <input type="number" name="price" id="price" value="1" step="1" min="1" max="99999999">
                </div>

                <div class="form-row">
                    <label for="quantity">Stock/Quantity</label>
                    <input type="number" name="quantity" id="quantity" value="1" step="1" min="0" max="99999999">
                </div>

                <div class="form-row">
                    <label for="type">Type of Toy</label>
                    <select name="type" id="type">
                            <option value="rc-car">RC Car</option>
                            <option value="rc-boat">RC Boat</option>
                            <option value="rc-heli">RC Heli</option>
                    </select>
                </div>

                <div class="form-row">
                    <label for="image">Image</label>
                    <input type="file" name="image">
                </div>
            </fieldset>

            <div id="buttons">
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">

            </div>
        </form>
    </div>
@endsection