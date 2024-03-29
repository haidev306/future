<div class="modal fade" id="modal_export" wire:ignore tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold modal-title">Export</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->

                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="required form-label mb-2">Select Export
                        Format:</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="format"
                            wire:model="type" class="form-select form-select-solid fw-bold">
                        <option value="excel">Excel</option>
                        <option value="pdf">PDF</option>
                        <option value="csv">CSV</option>
                    </select>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->

                <!--end::Actions-->

                <!--end::Form-->
            </div>
            <!--end::Modal body-->
            <div class="modal-footer">
                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                    Discard
                </button>
                <button type="submit" class="btn btn-primary" wire:click="export">
                    <span class="indicator-label" wire:loading.class="hidden">Submit</span>
                    <span class="indicator-progress" wire:loading>Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </div>

        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
