@extends('main')

@section('title', '| Welcome to the Flavors of love')

@section('content')

<form action="/edit_post" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group row">
    <label for="postTitle" class="col-sm-2 col-form-label">Post Title</label>
    <div class="col-sm-10">
      <input type="text" value="{{ $post->post_title }}" class="form-control" name="postTitle" id="postTitle" placeholder="Title">
    </div>
  </div>
  <div class="form-group row">
    <label for="postType" class="col-sm-2 col-form-label">Post Type</label>
    <div class="col-sm-10">
      <select class="form-control" name="postType" id="postType">
        @foreach($post_types as $post_type)
          <option {{ $post->post_type == $post_type->id ? 'selected' : '' }} value="{{ $post_type->id }}">{{ $post_type->type_name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="postCat" class="col-sm-2 col-form-label">Post Category</label>
    <div class="col-sm-10">
      <select class="form-control" name="postCat" id="postCat">
        @foreach($cats as $cat)
          <option {{ $post->category_ID == $cat->id ? 'selected' : '' }} value="{{ $cat->id }}">{{ $cat->category_name }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="Post" class="col-sm-2 col-form-label">Post</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="postContent" id="post" placeholder="Post">
        {!! $post->post_content !!}
      </textarea>
    </div>
  </div>
<script type="text/javascript">
  tinymce.init({
  selector: 'textarea',
  entity_encoding : "raw",
  height: 500,
  width:  910,
  menubar: false,
  // and here's our custom image picker
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    
    // Note: In modern browsers input[type="file"] is functional without 
    // even adding it to the DOM, but that might not be the case in some older
    // or quirky browsers like IE, so you might want to add it to the DOM
    // just in case, and visually hide it. And do not forget do remove it
    // once you do not need it anymore.

    input.onchange = function() {
      var file = this.files[0];
      
      var reader = new FileReader();
      reader.onload = function () {
        // Note: Now we need to register the blob in TinyMCEs image blob
        // registry. In the next release this part hopefully won't be
        // necessary, as we are looking to handle it internally.
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        // call the callback and populate the Title field with the file name
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };
    
    input.click();
  },
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount',
    'image imagetools table'
  ],
  toolbar: 'undo redo | formatselect | image link code table | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css']
});

</script>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="button" class="btn btn-primary" onclick="document.getElementById('display').innerHTML = tinymce.get('post').getContent();">Preview</button>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
<div id='display'>
  
</div>
@endsection