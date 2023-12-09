
<div class="form-group mb-3">
    <label for="image"><strong>Image</strong><span class="text-danger">*</span></label>
    <input type="file" name="image" class="form-control " id="image">

</div>


<div class="form-group mb-3">
    <label for="status"><strong>Status</strong><span class="text-danger">*</span></label>
    <select class="form-control" required name="status" id="status">
        <option value="1" {{ isset($carousel) && $carousel->status == 1 ? 'Active' : '' }}>Active</option>
        <option value="0" {{ isset($carousel) && $carousel->status == 0 ? 'Inactive' : '' }}>Inactive</option>
    </select>

</div>
