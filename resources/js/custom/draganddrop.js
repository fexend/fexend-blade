function dropZone() {
    return {
        dragover: false,
        files: [],
        handleFileSelect(event) {
            const files = event.target.files;
            this.addFiles(files);
        },
        dropFile(event) {
            this.dragover = false;
            const files = event.dataTransfer.files;
            this.addFiles(files);
        },
        addFiles(files) {
            for (let file of files) {
                if (!this.files.find((f) => f.name === file.name)) {
                    this.files.push(file);
                }
            }
        },
        removeFile(file) {
            this.files = this.files.filter((f) => f !== file);
        },
    };
}
