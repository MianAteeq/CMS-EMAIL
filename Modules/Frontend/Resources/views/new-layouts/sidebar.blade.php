<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">



            <li class=" navigation-header" style="font-family: 'Poppins';color: black;"><span>Contents</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Apps"></i>
            </li>
            <li class=" nav-item @if (auth()->user()->profile['step']==0) active @endif"><a href="{{route('vender.profile.back',1)}}"> @if (auth()->user()->profile['step']==0) <i class="ft-chevron-right"></i> @endif <span class="menu-title" data-i18n="ToDo">Overview </span> @if (auth()->user()->profile['is_overview']==1) <i class="ft-check" style="color: #18a718;"></i> @endif</a>
            </li>
            <li  class="nav-item  @if (auth()->user()->profile['step']==1 || auth()->user()->profile['edit_step']==1) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',2)}}"> @if (auth()->user()->profile['step']==1) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Your Business Information</span>  @if (auth()->user()->profile['is_business_info']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li  class="nav-item  @if (auth()->user()->profile['step']==2 || auth()->user()->profile['edit_step']==2) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',3)}}"> @if (auth()->user()->profile['step']==2) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">VAT</span>  @if (auth()->user()->profile['is_vat']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li  class=" nav-item @if (auth()->user()->profile['step']==3 || auth()->user()->profile['edit_step']==3) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',4)}}"> @if (auth()->user()->profile['step']==3) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Trading Name</span> @if (auth()->user()->profile['is_trading_names']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li  class=" nav-item @if (auth()->user()->profile['step']==4 || auth()->user()->profile['edit_step']==4) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',5)}}"> @if (auth()->user()->profile['step']==4) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Your business activities</span>@if (auth()->user()->profile['is_business_activity']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li   class=" nav-item @if (auth()->user()->profile['step']==5 || auth()->user()->profile['edit_step']==5) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',6)}}"> @if (auth()->user()->profile['step']==5) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Trade unit</span>@if (auth()->user()->profile['is_trading_unit']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li  class=" nav-item @if (auth()->user()->profile['step']==6 || auth()->user()->profile['edit_step']==6) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',7)}}"> @if (auth()->user()->profile['step']==6) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Main contact</span>@if (auth()->user()->profile['is_main_account']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li  class=" nav-item @if (auth()->user()->profile['step']==7 || auth()->user()->profile['edit_step']==7) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',8)}}"> @if (auth()->user()->profile['step']==7) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Subscription</span>@if (auth()->user()->profile['is_subscription']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li  class=" nav-item @if (auth()->user()->profile['step']==8 || auth()->user()->profile['edit_step']==8) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',9)}}"> @if (auth()->user()->profile['step']==8) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Direct Debit Mendate</span>@if (auth()->user()->profile['is_direct_debit']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li  class=" nav-item @if (auth()->user()->profile['step']==9 || auth()->user()->profile['edit_step']==9) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',10)}}"> @if (auth()->user()->profile['step']==9) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Bank details</span>@if (auth()->user()->profile['is_bank']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>

            <li  class=" nav-item @if (auth()->user()->profile['step']==10 ||auth()->user()->profile['edit_step']==10) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',11)}}"> @if (auth()->user()->profile['step']==10) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Terms and conditions</span>@if (auth()->user()->profile['is_terms']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>
            <li  class=" nav-item @if (auth()->user()->profile['step']==11 && auth()->user()->profile['edit_step']==0) active @endif"><a style="padding-top: 10px !important;" href="{{route('vender.profile.back',12)}}"> @if (auth()->user()->profile['step']==11) <i class="ft-chevron-right"></i> @endif<span class="menu-title" data-i18n="ToDo">Review and submit</span>@if (auth()->user()->profile['is_finish']==1) <i class="ft-check" style="color: #18a718;"></i> @else <i class="ft-x" style="color: red;"></i>  @endif</a>
            </li>

        </ul>
    </div>
</div>
