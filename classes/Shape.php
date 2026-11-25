<?php

class Shape
{
    private int $width;
    private int $height;
    private string $color;

    public function __construct(int $width, int $height, string $color)
    {
        $this->width = $width > 0 ? $width : 100;
        $this->height = $height > 0 ? $height : 100;
        $this->color = $this->isValidHexColor($color) ? $color : '#ff0000';
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function render(): string
    {
        return sprintf(
            '<div class="shape" style="width: %dpx; height: %dpx; background-color: %s;"></div>',
            $this->width,
            $this->height,
            htmlspecialchars($this->color, ENT_QUOTES, 'UTF-8')
        );
    }

    private function isValidHexColor(string $color): bool
    {
        return preg_match('/^#[0-9a-fA-F]{3}([0-9a-fA-F]{3})?$/', $color) === 1;
    }
}
