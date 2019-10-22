var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike', 'link'],        // toggled buttons
  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  ['blockquote', 'code-block'],
  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown

  ['video', 'formula', 'image'],
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }],

  ['clean']                                         // remove formatting button
];

var options = {
  theme: 'snow',
  modules: {
    toolbar: toolbarOptions,
    formula: true          // Include formula module (needs extra css + Katex Script)
  },
  placeholder: ''
 }

var container = document.querySelector('.customQuill');
var editor = new Quill(container, options);