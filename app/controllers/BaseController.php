<?php

class BaseController extends Controller {

    protected $pagevars;

    public function __construct()
    {
        $this->pagevars = new stdClass;

        View::share('pagevars', $this->pagevars);
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
