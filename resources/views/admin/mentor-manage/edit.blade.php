@extends('admin.layout.master')
@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->
    
      <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Sửa thông tin cố vấn</h5> 
                  {{-- <small class="text-muted float-end">Default label</small> --}}
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-floating form-floating-outline mb-4">
                      <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                      <label for="basic-default-fullname">Họ và tên</label>
                    </div>
                    {{-- <div class="form-floating form-floating-outline mb-4">
                      <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                      <label for="basic-default-company"></label>
                    </div> --}}
                    <div class="mb-4">
                      <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                          <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                          <label for="basic-default-email">Email</label>
                        </div>
                        <span class="input-group-text" id="basic-default-email2">@example.com</span>
                      </div>
                      <div class="form-text"> You can use letters, numbers & periods </div>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                      <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" />
                      <label for="basic-default-phone">Số điện thoại</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                      <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" style="height: 60px;"></textarea>
                      <label for="basic-default-message">Ghi chú</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
    <!-- / Content -->
@endsection