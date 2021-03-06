@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Forms</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Form</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Base Form Control</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email2">Email Address</label>
                                <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                                <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-3 col-form-label">Inline Input</label>
                                <div class="col-md-9 p-0">
                                    <input type="text" class="form-control input-full" id="inlineinput" placeholder="Enter Input">
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label for="successInput">Success Input</label>
                                <input type="text" id="successInput" value="Success" class="form-control">
                            </div>
                            <div class="form-group has-error has-feedback">
                                <label for="errorInput">Error Input</label>
                                <input type="text" id="errorInput" value="Error" class="form-control">
                                <small id="emailHelp" class="form-text text-muted">Please provide a valid informations.</small>
                            </div>
                            <div class="form-group">
                                <label for="disableinput">Disable Input</label>
                                <input type="text" class="form-control" id="disableinput" placeholder="Enter Input" disabled>
                            </div>
                            <div class="form-check">
                                <label>Gender</label><br/>
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
                                    <span class="form-radio-sign">Male</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                    <span class="form-radio-sign">Female</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Static
                                </label> 
                                <p class="form-control-static">hello@example.com</p> 
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Example multiple select</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea class="form-control" id="comment" rows="5">

                                </textarea>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">Agree with terms and conditions</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Input Group</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="basic-url">Your vanity URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">With textarea</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default btn-border" type="button">Button</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-border dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Group Styles</div>
                        </div>
                        <div class="card-body">
                            <label class="mb-3"><b>Form Group Default</b></label>
                            <div class="form-group form-group-default">
                                <label>Input</label>
                                <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                            </div>
                            <div class="form-group form-group-default">
                                <label>Select</label>
                                <select class="form-control" id="formGroupDefaultSelect">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <label class="mt-3 mb-3"><b>Form Floating Label</b></label>
                            <div class="form-group form-floating-label">
                                <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                <label for="inputFloatingLabel" class="placeholder">Input</label>
                            </div>
                            <div class="form-group form-floating-label">
                                <select class="form-control input-border-bottom" id="selectFloatingLabel" required>
                                    <option value="">&nbsp;</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <label for="selectFloatingLabel" class="placeholder">Select</label>
                            </div>
                            <div class="form-group form-floating-label">
                                <input id="inputFloatingLabel2" type="text" class="form-control input-solid" required>
                                <label for="inputFloatingLabel2" class="placeholder">Input</label>
                            </div>
                            <div class="form-group form-floating-label">
                                <select class="form-control input-solid" id="selectFloatingLabel2" required>
                                    <option value="">&nbsp;</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <label for="selectFloatingLabel2" class="placeholder">Select</label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Control Styles</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="squareInput">Square Input</label>
                                <input type="text" class="form-control input-square" id="squareInput" placeholder="Square Input">
                            </div>
                            <div class="form-group">
                                <label for="squareSelect">Square Select</label>
                                <select class="form-control input-square" id="squareSelect">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pillInput">Pill Input</label>
                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Pill Input">
                            </div>
                            <div class="form-group">
                                <label for="pillSelect">Pill Select</label>
                                <select class="form-control input-pill" id="pillSelect">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="solidInput">Solid Input</label>
                                <input type="text" class="form-control input-solid" id="solidInput" placeholder="Solid Input">
                            </div>
                            <div class="form-group">
                                <label for="solidSelect">Solid Select</label>
                                <select class="form-control input-solid" id="solidSelect">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>											
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Control Styles</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="largeInput">Large Input</label>
                                <input type="text" class="form-control form-control-lg" id="largeInput" placeholder="Large Input">
                            </div>
                            <div class="form-group">
                                <label for="largeInput">Default Input</label>
                                <input type="text" class="form-control form-control" id="defaultInput" placeholder="Default Input">
                            </div>
                            <div class="form-group">
                                <label for="smallInput">Small Input</label>
                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                            </div>
                            <div class="form-group">
                                <label for="largeSelect">Large Select</label>
                                <select class="form-control form-control-lg" id="largeSelect">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="defaultSelect">Default Select</label>
                                <select class="form-control form-control" id="defaultSelect">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="smallSelect">Small Select</label>
                                <select class="form-control form-control-sm" id="smallSelect">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection