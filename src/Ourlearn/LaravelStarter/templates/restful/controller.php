<?php 

class [Model]Controller extends \BaseController 
{
	protected $[model];

	public function __construct([Model]RepositoryInterface $[model])
	{
		$this->[model] = $[model];
	}

	public function getIndex()
	{
    	$[models] = $this->[model]->all();
        $this->layout->content = \View::make('[model].all', compact('[models]'));
	}

	public function getCreate()
	{
        $this->layout->content = \View::make('[model].create');
	}

	public function postIndex()
	{
        $this->[model]->store(\Input::only([repeat]'[property]',[/repeat]));
        return \Redirect::to('[model]');
	}

	public function getDetails($id)
	{
        $[model] = $this->[model]->find($id);
        $this->layout->content = \View::make('[model].view')->with('[model]', $[model]);
	}

	public function getEdit($id)
	{
        $[model] = $this->[model]->find($id);
        $this->layout->content = \View::make('[model].edit')->with('[model]', $[model]);
	}

	public function putUpdate($id)
	{
        $this->[model]->update($id, \Input::only([repeat]'[property]',[/repeat]));
        return \Redirect::to('[model]/details/'.$id);
	}

	public function deleteDelete($id)
	{
        $this->[model]->destroy($id);
        return \Redirect::to('[model]');
	}

}
