@extends('layouts.appadmin')

@section('content')

<div class="ibox">
    <div class="ibox-title">
        <h5>Wizard with Validation</h5>
    </div>
    <div class="ibox-content">
        <h2>
            Validation Wizard Form
        </h2>
        <p>
            This example show how to use Steps with jQuery Validation plugin.
        </p>
        <div class="content clearfix">
            <h1 id="form-h-0" tabindex="-1" class="title current">Account</h1>
            <fieldset id="form-p-0" role="tabpanel" aria-labelledby="form-h-0" class="body current" aria-hidden="false">
                <h2>Account Information</h2>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Username *</label>
                            <input id="userName" name="userName" type="text" class="form-control required" aria-required="true">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input id="password" name="password" type="text" class="form-control required" aria-required="true">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password *</label>
                            <input id="confirm" name="confirm" type="text" class="form-control required" aria-required="true">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div style="margin-top: 20px">
                                <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
        <div class="ibox-footer">
            <div class="form-group row">
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                    <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
