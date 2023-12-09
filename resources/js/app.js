import './bootstrap';
// app.js or another entry point for your project


import jQuery from 'jquery';
window.$ = jQuery;

import swal from 'sweetalert2';
window.Swal = swal;



    $(document).ready(function() {
        $('.delete_button').click(function(e) {
            e.preventDefault(); // Prevent the form from submitting

            const itemId = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user clicks 'Yes', submit the form for deletion
                    $(this).closest('form').submit();
                }
            });
        });


            $('#createItemForm').submit(function(e) {
                e.preventDefault(); // Prevent the form from submitting

                Swal.fire({
                    title: 'Confirm Item Creation',
                    text: 'Are you sure you want to create this item?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, create it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user clicks 'Yes', submit the form for creation
                        this.submit();
                    }
                });
            });


            // $('#update').submit(function(e) {
            //     e.preventDefault(); // Prevent the form from submitting

            //     Swal.fire({
            //         position: "center",
            //         icon: "success",
            //         title: "Your work has been saved",
            //         showConfirmButton: true,
            //         timer: 1500
            //       }).then((result) => {
            //         if (result.isConfirmed) {
            //             // If user clicks 'Yes', submit the form for creation
            //             this.submit();
            //         }
            //     });
            // });






    });


