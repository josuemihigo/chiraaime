@extends('layouts.appadmin')
@section('content')
<div class="ibox">
    <div class="ibox-title">
        <h5>Wizard with Validation</h5>
    </div>
    <div class="ibox-content">
        <div class="content clearfix">
            <h1 id="form-h-0" tabindex="-1" class="title current">Account</h1>
            <fieldset id="form-p-0" role="tabpanel" aria-labelledby="form-h-0" class="body current" aria-hidden="false">
            <form method="POST" action="">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Username *</label>
                            <input id="userName" name="userName" type="text" class="form-control @error('email') is-invalid @enderror required" value=""{{ old('email') }}" aria-required="true">
                            @error('content')
                                <div class="invalid-feedback" role="alert">
                                    <strong>le texte ecrit et invalide</strong>
                                </div>
                            @enderror
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
                <div class="ibox-footer">
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                        </div>
                    </div>
                </div>
            </form>

    </div>
@endsection
