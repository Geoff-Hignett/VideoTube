<?php

class VideoDetailsFormProvider
{
    public function createUploadForm()
    {
        $fileInput = $this->createFileInput();
        $titleInput = $this->createTitleInput();
        return "<form action='processing.php' method='post'>
                    $fileInput
                    $titleInput
                </form>";
    }

    private function createFileInput()
    {
        return "<div class='form-group'>
                    <label for='exampleFormControlFile1'>Your file</label>
                    <input type='file' class='form-control-file' id='exampleFormControlFile1' name='fileInput' required>
                </div>";
    }

    private function createTitleInput()
    {
        return "<div class='form-group'>
                    <input class='form-control' type='text' placeholder='Title' name='titleInput' required>
                </div>";
    }
}
