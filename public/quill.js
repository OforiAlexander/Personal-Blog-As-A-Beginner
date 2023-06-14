import Quill from 'quill';

var quill = new Quill('#quill-body-editor', {
    modules: {
      toolbar: [
        [{ header: [1, 2,3,4, false] }],
        ['bold', 'italic', 'underline'],
        [{'list':'ordered'}, {'list':'bullet'}] ,
        [{ 'rollback': ['bold'] }]
      ]
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'  // or 'bubble'
  });