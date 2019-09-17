<?php

class VideoDetailsFormProvider
{
    public function createUploadForm()
    {
        $fileInput = $this->createFileInput();
        $titleInput = $this->createTitleInput();
        $descriptionInput = $this->createDescriptionInput();
        $privacyInput = $this->createPrivacyInput();
        return "<form action='processing.php' method='post'>
                    $fileInput
                    $titleInput
                    $descriptionInput
                    $privacyInput
                </form>";
    }

    private function createFileInput()
    {
        return "<div class='form-group'>
                    <label for='exampleFormControlFile1'>Your file</label>
                    <input type='file' class='form-control-file' id='exampleFormControlFile1' name='fileInput'>
                </div>";
    }

    private function createTitleInput()
    {
        return "<div class='form-group'>
                    <input class='form-control' type='text' placeholder='Title' name='titleInput' required>
                </div>";
    }

    private function createDescriptionInput()
    {
        return "<div class='form-group'>
                    <textarea class='form-control' placeholder='Description' name='descriptionInput'rows='3'></textarea>
                </div>";
    }

    private function createPrivacyInput()
    {
        return "<div class='form-group'>
                    <select class='form-control' name='privacyInput'>
                        <option value='0'>Public</option>
                        <option value='1'>Private</option>
                    </select>
                </div>";
    }
}
