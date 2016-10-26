<div class="users form large-9 medium-8 columns content">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	    <hr />
	    <h5>Enter Details to Login</h5>
	       <br />
	     <div class="form-group input-group">
	            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
	            <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Tu email']) ?>
	        </div>
	                                              <div class="form-group input-group">
	            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
	            <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'Tu password']) ?>
	        </div>
	    <div class="form-group">
	            <label class="checkbox-inline">
	                <input type="checkbox" /> Remember me
	            </label>
	            <span class="pull-right">
	                   <a href="index.html" >Forget password ? </a> 
	            </span>
	        </div>
	     
	    <?= $this->Form->button('Login Now', ['class' => 'btn btn-primary']); ?>
	    <hr />
	    Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
	<?= $this->Form->end() ?>
</div>