<?php
if (isset($_POST['hexColorCode'])) {
    $hexToRGBColorCodeConverter = new HexToRGBColorCodeConverter($_POST['hexColorCode']);
    $hexToRGBColorCodeConverter->hexToRGBColorCodeConverter();
}

class HexToRGBColorCodeConverter
{
    public $hexColorCode;

    public function __construct($hexColorCode = "")
    {
        $this->hexColorCode = filter_input(INPUT_POST, $hexColorCode, FILTER_SANITIZE_STRING);
    }

    public function hexToRGBColorCodeConverter()
    {
        list($red, $green, $blue) = sscanf($this->hexColorCode, "%02x%02x%02x");
        header("location: ../Views/hex_to_rgb_color_converter.php?red={$red}&green={$green}&blue={$blue}");
    }
}
