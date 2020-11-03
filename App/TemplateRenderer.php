<?php declare(strict_types=1);

namespace App;

use Latte\Engine;

class TemplateRenderer
{
    const TEMPLATES_DIR = __DIR__ . '/template/view/';
    const FILE_EXTENSION = '.latte';

    public function getViewHtml(
        string $viewName,
        array $templateParameters = []
    ): string
    {
        $latte = new Engine;
        $latte->setTempDirectory(TEMP_DIR);

        return $latte->renderToString(
            $this->resolveFilename($viewName),
            $templateParameters
        );
    }

    private function resolveFilename(string $viewName): string
    {
        return self::TEMPLATES_DIR . $viewName . self::FILE_EXTENSION;
    }
}