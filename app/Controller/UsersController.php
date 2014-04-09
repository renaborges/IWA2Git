<?php
class UsersController extends AppController {
    
	public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout. If 'add and logout' is not passed no one can visit the website. You could also pass 'index & edit' for example
	//Auth is a big class that has a component called allow()
    $this->Auth->allow('add', 'logout');
	}	
	
	/**Uses the configured Authorization adapters to check whether 
	*or not a user is authorized. Each adapter will be checked in 
	*sequence, if any of them return true, then the user will be 
	*authorized for the request.
	*/
	public function isAuthorized($user){
	
		if (isset($user['role']) && $user['role'] === 'admin') {
			return true;
		}		
		
		if(in_array($this->action, array('edit', 'delete'))){
					if($user['id'] != $this->request->params['pass'][0]){
					return false;
			}
		}
		return true;
	}
	
    public function index() {
		//The User is the Model, it goes 1 level down to posts table to find the posts of an user
        $this->User->recursive = 0;
		//DB (Model) gives the results and now it's passed over to the view to interpreter - using HTML in this case.
		//paginate is a method that display many pages in a block - click page 1 - page 2 etc
        $this->set('users', $this->paginate());
    }
	
	//First we send the id of the user
    public function view($id = null) {
		//Model goes off and looks for the user id
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
		//If Model can find the user read the user id. $this is this current class. This line is the hand over
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
		//This is a HTTP Post Request
        if ($this->request->is('post')) {
			//Initializing your Model
            $this->User->create();
			//If session is successful, $this current class in connecting to the User Model. The Request Object is a bag with bits of data (data from the form) that's going to be saved in the DB.
            if ($this->User->save($this->request->data)) {
				//Whatever you are in the website you can 'setFlash' to display to the user a message
                $this->Session->setFlash(__('The user has been saved'));
				//redirect method is redirecting to their on index. The action/function is to be redirected to the function index() in this file.
                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }
	//edit a particular user
    public function edit($id = null) {
		//Here we say to the Model to find the user with this id
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
		//if user id exists...puts is often used to edit/update
        if ($this->request->is('post') || $this->request->is('put')) {
			//save whatever comes from the form object
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been updated'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } else {
			//we did found the user id, but maybe was using GET request instead POST, so..
            $this->request->data = $this->User->read(null, $id);
			//say someone write manually cakeblog/users/edit/3 looking for user 3, the data comes back, however the password is not showed.
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
		//only allow to delete a request if you are using a POST request
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
		//it say to Model to delete from the DB
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }	
	
		public function login() {
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect(array('controller' => 'posts', 'action'=>'index')));
				}
			$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}

		public function logout() {
			return $this->redirect($this->Auth->logout());
		}
	
			
    public function home() {
		//The User is the Model, it goes 1 level down to posts table to find the posts of an user
        $this->User->recursive = 0;
		//DB (Model) gives the results and now it's passed over to the view to interpreter - using HTML in this case.
		//paginate is a method that display many pages in a block - click page 1 - page 2 etc
        $this->set('users', $this->paginate());
    }
}


?>