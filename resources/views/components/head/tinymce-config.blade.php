<div></div><script src="https://cdn.tiny.cloud/1/vltdjr0xjknff4nuim0394nw663dp8gshcoz2f0s4cg6irpo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      image_title : true,
        automatic_uploads: true,
        images_upload_url : '{{ route('upload.image') }}',
        file_picker_types: 'image',
        file_picker_callback: function (cv, value, meta){
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function(){
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                render.onload = function(){
                    var id = 'blobid'+(new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), {title:file.name});
                };
            };
            input.click();
        },      
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | forecolor | link image media table | image | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>

    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>