<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    function savePost() {
        document.getElementById('body').value = quill.root.innerHTML;
    }
</script>