<div class="col-md-12">
    <div class="listing-title-area">

        <div class="form-group">
            <label>
                {{(Config::get('app.locale') == 'ar') ? $globalNames->work_experience_ar :$globalNames->work_experience }}
            </label>

            <div class="row">

                <div class="col-md-12">
                    <input type="text" name="company_name_first" class="form-control" id="company_name_first" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }}" value="{{old('company_name_first')}}">

                    <div class="cleaner-h1"></div>

                </div><!--end col-6-->
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label>@lang('messages.From')</label>
                        <div class="cleaner-h1"></div>
                    </div>

                    <div class="col-md-6">
                        <label>@lang('messages.To')</label>
                        <div class="cleaner-h1"></div>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-md-6">
                        <input type="date" class="form-control" name="company_from_date_first" value="{{old('company_from_date_first')}}" id="company_from_date_first">
                        <div class="cleaner-h1"></div>
                    </div>

                    <div class="col-md-6">
                        <input type="date" class="form-control" name="company_to_date_first" value="{{old('company_to_date_first')}}" id="company_to_date_first">
                        <div class="cleaner-h1"></div>
                    </div>
                </div>
            </div>
            <div class="cleaner-h1"></div>
            <div class="row">

                <div class="col-md-12">
                    <input type="text" name="company_name_second" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }}" value="{{old('company_name_second')}}">

                    <div class="cleaner-h1"></div>

                </div><!--end col-6-->
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label>@lang('messages.From')</label>
                        <div class="cleaner-h1"></div>
                    </div>

                    <div class="col-md-6">
                        <label>@lang('messages.To')</label>
                        <div class="cleaner-h1"></div>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-md-6">
                        <input type="date" class="form-control" name="company_from_date_second" value="{{old('company_from_date_second')}}" id="company_from_date_second">
                        <div class="cleaner-h1"></div>
                    </div>

                    <div class="col-md-6">
                        <input type="date" class="form-control" name="company_to_date_second" value="{{old('company_to_date_second')}}" id="company_to_date_second">
                        <div class="cleaner-h1"></div>
                    </div>
                </div>
            </div>


        </div><!--end form-group-->

        <div id="company-third" style="display: none;">
            <div class="row">

                <div class="col-md-12">
                    <input type="text" name="company_name_third" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }}" value="{{old('company_name_third')}}" id="company_name_third">

                    <div class="cleaner-h1"></div>

                </div><!--end col-6-->
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label>@lang('messages.From')</label>
                        <div class="cleaner-h1"></div>
                    </div>

                    <div class="col-md-6">
                        <label>@lang('messages.To')</label>
                        <div class="cleaner-h1"></div>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-md-6">
                        <input type="date" class="form-control" name="company_from_date_third" value="{{old('company_from_date_third')}}" id="company_from_date_third">
                        <div class="cleaner-h1"></div>
                    </div>

                    <div class="col-md-6">
                        <input type="date" class="form-control" name="company_to_date_third" value="{{old('company_to_date_third')}}" id="company_to_date_third">
                        <div class="cleaner-h1"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>
</div><!--end col-12-->
