<div class="form-group mt-4">
    <label for="Property_Name"><strong>Property Name</strong><span class="text-danger">*</span></label>
    <input type="text" name="name"  value="{{ isset($property) ? $property->name : '' }}"
        class="form-control" id="Property_Name" placeholder="Name" required>

</div>

<div class="form-group mb-3">
    <label for="location"><strong>Property Location</strong><span class="text-danger">*</span></label>
    <input type="text" name="location" required value="{{ isset($property) ? $property->location : '' }}"
        class="form-control " id="location">

</div>

<div class="form-group mb-3">
    <label for="price"><strong>Price</strong><span class="text-danger">*</span></label>
    <input type="text" name="price" required value="{{ isset($property) ? $property->price : '' }}"
        class="form-control " id="price">

</div>

<div class="form-group mb-3">
    <label for="bed"><strong>Bed room</strong><span class="text-danger">*</span></label>
    <input type="text" name="bed" required value="{{ isset($property) ? $property->bed : '' }}"
        class="form-control " id="bed">

</div>

<div class="form-group mb-3">
    <label for="bath"><strong>Bathroom</strong><span class="text-danger">*</span></label>
    <input type="text" name="bath" required value="{{ isset($property) ? $property->bath : '' }}"
        class="form-control " id="bath">

</div>

<div class="form-group mb-3">
    <label for="image"><strong>Image</strong><span class="text-danger">*</span></label>
    <input type="file" name="image" class="form-control " id="image">

</div>

<div class="form-group mb-3">
    <label for="description"><strong>Description</strong><span class="text-danger">*</span></label>
    <textarea class="summernote" name="description" id="description">{{ isset($property) ? $property->description : '' }}</textarea>

</div>

<div class="form-group mb-3">
    <label for="status"><strong>Status</strong><span class="text-danger">*</span></label>
    <select class="form-control" required name="status" id="status">
        <option value="1" {{ isset($property) && $property->status == 1 ? 'Active' : '' }}>Active</option>
        <option value="0" {{ isset($property) && $property->status == 0 ? 'Inactive' : '' }}>Inactive</option>
    </select>

</div>
