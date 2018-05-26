<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="modal fade" id="unscheduleUserModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Unschedule Volunteer</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to unschedule this volunteer?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" disabled
                        data-id="" 
                        data-user-id=""
                        data-url="<?php echo base_url('opportunity/unschedule_user') ?>">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>


