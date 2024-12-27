<style>
    #drop-zone {
        width: 100%;
        height: 200px;
        border: 2px dashed #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #ccc;
        margin-bottom: 20px;
    }

    /*#file-viewer {
        width: 100%;
        height: 600px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
    }*/

    #continue-button {
        display: none;
        padding: 10px 20px;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
    }

    #continue-button:hover {
        background-color: #45a049;
    }
</style>

<div id="drop-zone">Drag and drop your PDF or XLS file here</div>
<button id="continue-button" class="bg-primary">Continue</button>
<div id="file-viewer"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.0.279/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<script>
    const dropZone = document.getElementById('drop-zone');
    const fileViewer = document.getElementById('file-viewer');
    const continueButton = document.getElementById('continue-button');

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.style.borderColor = '#000';
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.style.borderColor = '#ccc';
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        const dataTransfer = new DataTransfer();
        const filePath = "/App/Views/sample.xlsx"
        fetch(filePath).then(r => r.blob()).then(b => {
            const _file = new File([b], filePath.split('/').pop(), {
                type: b.type
            });
            dataTransfer.items.add(_file);
            dropZone.style.borderColor = '#ccc';
            const file = dataTransfer.files[0];
            if (file) {
                const fileType = file.type;
                if (fileType === 'application/pdf') {
                    viewPDF(file);
                } else if (fileType.includes('spreadsheetml') || fileType.includes('excel')) {
                    viewXLS(file);
                } else {
                    alert('Only PDF and XLS files are supported.');
                }
            }

            dropZone.style.display = 'none';
        })
    });

    function viewPDF(file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            console.log('PDF file loaded:', e.target.result);
            const typedarray = new Uint8Array(e.target.result);
            pdfjsLib.getDocument(typedarray).promise.then(pdf => {
                pdf.getPage(1).then(page => {
                    const scale = 0.6;
                    const viewport = page.getViewport({
                        scale: scale
                    });
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };
                    page.render(renderContext).promise.then(() => {
                        fileViewer.innerHTML = '';
                        fileViewer.appendChild(canvas);
                        continueButton.style.display = 'block';
                    });
                });
            }).catch(error => console.error('Error loading PDF:', error));
        };
        reader.readAsArrayBuffer(file);
    }

    function viewXLS(file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            console.log('XLS file loaded:', e.target.result);
            const data = new Uint8Array(e.target.result);
            const workbook = XLSX.read(data, {
                type: 'array'
            });
            const firstSheetName = workbook.SheetNames[0];
            const worksheet = workbook.Sheets[firstSheetName];
            const html = XLSX.utils.sheet_to_html(worksheet);
            fileViewer.innerHTML = html;
            continueButton.style.display = 'block';
        };
        reader.readAsArrayBuffer(file);
    }

    continueButton.addEventListener('click', () => {
        alert('Invoice recorded');
        fileViewer.innerHTML = '';
        dropZone.style.display = 'flex';
        continueButton.style.display = 'none';
    });
</script>