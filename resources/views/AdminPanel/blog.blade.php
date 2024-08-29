@extends('AdminPanel.layout.adminLayout')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
    .nav-tabs .nav-link {
        color: white; /* Default color for non-active tabs */
    }
    .nav-tabs .nav-link.active {
        color: black; /* Color for active tab */
    }
</style>

<div class="sectionHeader shadow p-3">
    <ul class="nav nav-tabs" id="myTab" role="tablist">

        <li class="nav-item" role="presentation">
            <button class="nav-link active " id="viewBlog-tab" data-bs-toggle="tab" data-bs-target="#viewBlog" type="button"
                role="tab" aria-controls="viewBlog" aria-selected="true"> 
                <span><i class="fa-solid fa-list-ul"></i></span> View Blog
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="addBlogs-tab" data-bs-toggle="tab" data-bs-target="#addBlogs" type="button"
                role="tab" aria-controls="addBlogs" aria-selected="false"> 
                <span><i class="fa-solid fa-plus"></i></span> Add Blogs
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-gray" id="editBlog-tab" data-bs-toggle="tab" data-bs-target="#editBlog" type="button"
                role="tab" aria-controls="editBlog" aria-selected="false"> 
                <span><i class="fa-solid fa-pen-to-square"></i></span> Edit Blogs
            </button>
        </li>
    </ul>
</div>

    <style>
        @font-face {
            font-family: Baskervville;
            src: url(fonts/BaskervvilleSC-Regular);
        }

        .font-family {
            font-family: Baskervville;
        }

        .feild-required {
            color: red;
        }

        .form-fields {
            width: 100%
        }
    </style>

    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="viewBlog" role="tabpanel" aria-labelledby="viewBlog-tab">
            <div class="container shadow p-4 mt-md-3">
                <h2 class="text-center py-2 font-family"> <span><i class="fa-solid fa-table-list"></i></span> &nbsp; Blog Lists </h2>
                <hr>

                <table class="table caption-top table-responsive">
                    <thead class="table-dark" >
                      <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Vivo.png</td>
                        <td>Vivo y-15</td>
                        <td>Vivo</td>
                        <td>24-02-2004</td>
                        <td>Active</td>
                        <td>Go</td>
                      </tr>
                    </tbody>
                  </table>

            </div>
        </div>


        <div class="tab-pane fade" id="addBlogs" role="tabpanel" aria-labelledby="addBlogs-tab">        
            <div class="container shadow p-4 mt-md-3">
                <h2 class="text-center py-2 font-family"> <span><i class="fa-regular fa-newspaper"></i></span> &nbsp; Add
                    Blog Panel</h2>
                <hr>
                <div class="form px-5 pt-4">
                    <form action="{{ route('admin.addBlogs') }}" method="POST" enctype="multipart/form-data"> 
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Featured Image</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8 d-flex">
                                <input type="file"  placeholder="Enter Blog Slug" class="form-control form-fields p-2 rounded"
                                    name="blogFeaturedImg" id="blogFeaturedImg" required>
                                    <div class="px-auto" id="preview" style="display: none;">
                                        <img src="" id="img-preview" alt="Uploaded Image"
                                            style="max-width: 100%; max-height: 100px;">
                                    </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('#blogFeaturedImg').on('change', function() {
                                    var file = this.files[0];
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#img-preview').attr('src', e.target.result);
                                        $('#preview').show();
                                    };
                                    reader.readAsDataURL(file);
                                });
                            });
                        </script>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Title</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Enter Blog Title" class="form-fields form-control p-2 rounded"
                                    name="blogTitle" id="blogTitle" required>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Slug</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Enter Blog Slug" class="form-fields form-control p-2 rounded"
                                    name="blogSlug" id="blogSlug" required>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Description</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <textarea type="text" placeholder="Enter Blog Description" class="form-control form-fields p-2 rounded" name="blogDescription"
                                    id="blogDescription" required>
                                </textarea>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Category</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Enter Blog Category" class="form-control form-fields p-2 rounded"
                                    name="blogCategory_id" id="blogCategory_id" required>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Focus Tags</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Enter Blog Tags" class="form-control form-fields p-2 rounded"
                                    name="blogTags" id="blogTags" required>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Keywords</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Enter Blog Keywords" class="form-control form-fields p-2 rounded"
                                    name="blogKeywords" id="blogKeywords" required>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Meta Title</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Enter Blog Meta Title" class="form-control form-fields p-2 rounded"
                                    name="blogMetaTitle" id="blogMetaTitle" required>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Meta Description</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Enter Blog Meta Description"
                                    class="form-fields form-control p-2 rounded" name="blogMetaDescription" id="blogMetaDescription"
                                    required>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="">Blog Meta Keywords</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Enter Blog Meta Keywords"
                                    class="form-fields p-2 form-control rounded" name="blogMetaKeywords" id="blogMetaKeywords"
                                    required>
                            </div>
                        </div>
    
                        <div class="d-flex py-3">
                            <div class="col-md-3">
                                <label class="p-2 font-family" for="blogStatus">Blog Status</label>
                                <span class="feild-required">*</span>
                            </div>
                            <div class="col-md-8">
                                <select name="blogStatus" id="blogStatus" class="form-control form-fields p-2 rounded" required>
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex py-3 gap-2">
                            <div class="col-md-3">
                                <button class="btn btn-danger" style="width: 100%" type="reset" > 
                                    <span><i class="fa-solid fa-ban"></i></span> 
                                    Reset Blog
                                </button>
                            </div>
                            <div class="col-md-8">
                                <button class="btn btn-primary" style="width: 100%" type="submit" > 
                                    <span><i class="fa-solid fa-arrow-up-from-bracket"></i></span> 
                                    Upload Blog
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        
        <div class="tab-pane fade" id="editBlog" role="tabpanel" aria-labelledby="editBlog-tab">
            <div class="container shadow p-4 mt-md-3">
                <h2 class="text-center py-2 font-family"> <span><i class="fa-solid fa-dice-d6"></i></span> &nbsp; Edit Blogs </h2>
                <hr>
            </div>
        </div>
    </div>
@endsection
