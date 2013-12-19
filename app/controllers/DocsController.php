<?php
use dflydev\markdown\MarkdownParser;

class DocsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->pagevars->body_class = 'docs';
    }

    public function index()
    {
        return $this->getDocs('introduction');
    }

    public function getDocs($document)
    {

        $docs_ver = '4.1';
        $docs_md = app_path() . '/docs.md/' . $docs_ver . '/' . $document . '.md';

        if (!file_exists($docs_md)) return 'Error!!';

        $markdownParser = new MarkdownParser();
        $docs_content = $markdownParser->transformMarkdown(file_get_contents($docs_md));

        return View::make('docs/index')
            ->with('docs_content', $docs_content);
    }
}
