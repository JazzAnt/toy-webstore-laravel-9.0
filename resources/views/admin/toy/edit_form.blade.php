@section('add_form')
<div id="wrapper">
        <h2>Add a Toy to the Catalog</h2>
        <form id="survey" action="{{ route('admin.product.update', ['id'=> $viewdata['toy']->getId()]) }}" method="post">
            @csrf
            @method('PUT')
                <div class="form-row">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ $viewdata['toy']->getName() }}">
                </div>

                <div class="form-row" id="description">
                    <label for="description">Description</label>
                </div>
                <div class="form-row">
                    <textarea name="description" id="description" value="{{ $viewdata['toy']->getDescription() }}"></textarea>
                </div>

                <div class="form-row">
                    <label for="price">Price (CAD)</label>
                    <input type="number" name="price" id="price" step="1" min="1" max="99999999" value="{{ $viewdata['toy']->getPrice() }}">
                </div>

                <div class="form-row">
                    <label for="quantity">Stock/Quantity</label>
                    <input type="number" name="quantity" id="quantity" step="1" min="0" max="99999999" value="{{ $viewdata['toy']->getQuantity() }}">
                </div>

                <div class="form-row">
                    <label for="type">Type of Toy</label>
                    <select name="type" id="type">
                        @if($viewdata['toy']->getType() == "rc-car")
                            <option value="rc-car" selected="selected">RC Car</option>
                            <option value="rc-boat">RC Boat</option>
                            <option value="rc-heli">RC Heli</option>

                        @elseif($viewdata['toy']->getType() == "rc-boat")
                            <option value="rc-car">RC Car</option>
                            <option value="rc-boat" selected="selected">RC Boat</option>
                            <option value="rc-heli">RC Heli</option>

                        @elseif($viewdata['toy']->getType() == "rc-heli")
                            <option value="rc-car">RC Car</option>
                            <option value="rc-boat">RC Boat</option>
                            <option value="rc-heli" selected="selected">RC Heli</option>

                        @else
                            <option value="rc-car">RC Car</option>
                            <option value="rc-boat">RC Boat</option>
                            <option value="rc-heli">RC Heli</option>
                        @endif
                    </select>
                </div>

                <div class="form-row">
                    <label for="image">Image</label>
                    <input type="file" name="image">
                </div>

            <div id="buttons">
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">

            </div>
        </form>
    </div>
@endsection