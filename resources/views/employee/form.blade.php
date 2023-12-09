<div class="form-group mt-4">
    <label for="employee_Name"><strong>Employee Name</strong><span class="text-danger">*</span></label>
    <input type="text" name="name"  value="{{ isset($employee) ? $employee->name : '' }}"
        class="form-control" id="employee_Name" placeholder="Name" required>

</div>

<div class="form-group mb-3">
    <label for="job_role"><strong>Employee Role</strong><span class="text-danger">*</span></label>
    <input type="text" name="job_role" value="{{ isset($employee) ? $employee->job_role : '' }}"
        class="form-control " id="job_role" placeholder="Job Position" required>

</div>


<div class="form-group mb-3">
    <label for="image"><strong>Image</strong><span class="text-danger">*</span></label>
    <input type="file" name="image" class="form-control " id="image">

</div>

<div class="form-group mt-4">
    <label for="twitter"><strong>Twitter link</strong></label>
    <input type="text" name="twitter"  value="{{ isset($employee) ? $employee->twitter : '' }}"
        class="form-control" id="twitter" placeholder="twitter link">

</div>
<div class="form-group mt-4">
    <label for="facebook"><strong>Facebook link</strong></label>
    <input type="text" name="facebook"  value="{{ isset($employee) ? $employee->facebook : '' }}"
        class="form-control" id="facebook" placeholder="facebook link" >

</div>
<div class="form-group mt-4">
    <label for="linkedin"><strong>Linkedin link</strong></label>
    <input type="text" name="linkedin"  value="{{ isset($employee) ? $employee->linkedin : '' }}"
        class="form-control" id="linkedin" placeholder="linkedin link" >

</div>
<div class="form-group mt-4">
    <label for="instagram"><strong>Instagram link</strong></label>
    <input type="text" name="instagram"  value="{{ isset($employee) ? $employee->instagram : '' }}"
        class="form-control" id="instagram" placeholder="instagram link" >

</div>

<div class="form-group mb-3">
    <label for="description"><strong>Description</strong><span class="text-danger">*</span></label>
    <textarea class="ckeditor form-control" required name="description" id="description">{{ isset($employee) ? $employee->description : '' }}</textarea>

</div>

<div class="form-group mb-3">
    <label for="status"><strong>Status</strong><span class="text-danger">*</span></label>
    <select class="form-control" required name="status" id="status">
        <option value="1" {{ isset($employee) && $employee->status == 1 ? 'Active' : '' }}>Active</option>
        <option value="0" {{ isset($employee) && $employee->status == 0 ? 'Inactive' : '' }}>Inactive</option>
    </select>

</div>
