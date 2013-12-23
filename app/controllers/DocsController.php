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
        if (in_array($document, array('4-0', '4-1', 'dev'))) {
            switch($document) {
            case '4-0':
                $docs_ver = '4.0';
                break;
            case '4-1':
                $docs_ver = '4.1';
                break;
            case 'dev':
                $docs_ver = 'dev';
                break;
            }
            Session::put('doc-ver', $docs_ver);

            return Redirect::back();
        }

        switch(Session::get('doc-ver', '4.1')) {
            case '4.0':
                $docs_ver = '4.0';
                break;
            case 'dev':
                $docs_ver = 'dev';
                break;
            default: // include 4.1
                $docs_ver = '4.1';
                break;
        }
        $docs_md = app_path() . '/docs.md/' . $docs_ver . '/' . $document . '.md';

        if (!file_exists($docs_md)) {
            return Redirect::to('docs/introduction');
        }

        $markdownParser = new MarkdownParser();
        $docs_content = $markdownParser->transformMarkdown(file_get_contents($docs_md));

        return View::make('docs/index')
            ->with('docs_ver', $docs_ver)
            ->with('docs_content', $docs_content);
    }
}
