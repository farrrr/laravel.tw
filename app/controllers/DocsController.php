<?php
use \Michelf\MarkdownExtra;

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
        if (in_array($document, array('4-0', '4-1', '4-2', 'dev'))) {
            switch ($document) {
            case '4-0':
                $docs_ver = '4.0';
                break;
            case '4-1':
                $docs_ver = '4.1';
                break;
            case '4-2':
                $docs_ver = '4.2';
                break;
            case 'dev':
                $docs_ver = 'dev';
                break;
            }
            Session::put('doc-ver', $docs_ver);

            return Redirect::back();
        }

        switch (Session::get('doc-ver', '4.2')) {
            case '4.0':
                $docs_ver = '4.0';
                break;
            case 'dev':
                $docs_ver = 'dev';
                break;
            case '4.1':
                $docs_ver = '4.1';
                break;
            default: // include 4.2
                $docs_ver = '4.2';
                break;
        }
        $docs_md = app_path() . '/docs.md/' . $docs_ver . '/' . $document . '.md';
        $sidebar_md = app_path() . '/docs.md/' . $docs_ver . '/' . 'documentation.md';

        if (!file_exists($docs_md)) {
            return Redirect::to('docs/introduction');
        }

        $docs_content = MarkdownExtra::defaultTransform(file_get_contents($docs_md));
        $sidebar_content = MarkdownExtra::defaultTransform(file_get_contents($sidebar_md));

        return View::make('docs/index')
            ->with('docs_ver', $docs_ver)
            ->with('docs_content', $docs_content)
            ->with('sidebar_content', $sidebar_content);
    }
}
